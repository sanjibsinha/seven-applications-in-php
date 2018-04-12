<?php

namespace IO;

    final class InvalidFilename extends \Exception {
        function __construct( $filename ){
            $this->message = 'Invalid filename: "' . $filename . '"';
        }
    }
    final class InvalidMode extends \Exception {
        function __construct( $mode ){
            $this->message = 'Invalid mode: "' . $mode . '"';
        }
    }
    final class WriteError extends \Exception {
        function __construct( $filename ){
            $this->message = 'Could not write into "' . $filename . '"';
        }
    }
    final class ReadError extends \Exception {
        function __construct( $filename ){
            $this->message = 'Could not read from "' . $filename . '"';
        }
    }
    final class EOF extends \Exception {
        function __construct( $filename ){
            $this->message = 'End Of File "' . $filename . '"';
        }
    }

    final class File {

        const READ = 1;
        const WRITE = 2;
        const BINARY = 4;
        const MEMORY = "\1";
        const VOID = "\0";

        const EOL = PHP_EOL;
        const EOL_WIN = "\r\n";
        const EOL_LINUX = "\n";
        const EOL_OLD_MAC = "\r";

        private $info=array(
            'content'=>'',
            'path'=>'',
            'name'=>'',
            'length'=>0,
            'p'=>0,
            'mode'=>1
        );

        function __construct( $filename, $mode = 1 ){

            $this->info['mode'] = $mode & 7;
            if( !$this->info['mode'] )
            {
                throw new InvalidMode( $mode );
            }

            if( $filename != self::MEMORY && $filename != self::VOID )
            {

                $this->info['path'] = dirname( $filename );
                if( !$this->info['path'] )
                {
                    $this->info['path'] = getcwd();
                }

                $this->info['name'] = basename( $filename );
                if( !$this->info['path'] )
                {
                    throw new InvalidFilename( $filename );
                }

                if( $mode & self::READ )
                {
                    $this->info['content'] = file_get_contents( $filename );

                    if( $this->info['content'] === false)
                    {
                        throw new ReadError( $filename );
                    }

                    if( !( $mode & self::BINARY ) )
                    {
                        $this->fix_eol();
                    }

                    $this->info['length'] = strlen( $this->info['content'] );
                }

            }
            else
            {
                $this->info['path'] = $this->info['name'] = $filename;
            }
        }

        function fix_eol()
        {
            $this->info['content'] = str_replace( array( self::EOL_WIN, self::EOL_LINUX, self::EOL_OLD_MAC ), self::EOL, $this->info['content'] );
        }

        function eof()
        {
            switch( $this->info['name'] )
            {
                case self::VOID:
                    return false;
                default:
                    return $this->info['p'] >= $this->info['length'];
            }
        }

        function read( $bytes = -1 )
        {
            if( $this->info['name'] == self::VOID )
            {
                return '';
            }

            if( $this->info['name'] != self::MEMORY && !( $this->info['mode'] & self::READ ) )
            {
                throw new ReadError( $this->info['name'] );
            }

            if( $this->eof() )
            {
                throw new EOF( $this->info['name'] );
            }

            if( $bytes < 0 || $bytes > $this->info['length'] - $this->info['p'] )
            {
                $bytes = $this->info['length'] - $this->info['p'];
            }

            $p = $this->info['p'];
            $this->info['p'] += $bytes;

            return '' . substr( $this->info['content'], $p, $bytes );
        }
        function readln( $trim = true )
        {
            if( $this->info['name'] == self::VOID )
            {
                return '';
            }

            if( $this->info['name'] != self::MEMORY && !( $this->info['mode'] & self::READ ) )
            {
                throw new ReadError( $this->info['name'] );
            }

            if( $this->eof() )
            {
                throw new EOF( $this->info['name'] );
            }

            $line_end = strpos( $this->info['content'], self::EOL, $this->info['p'] );
            $p = $this->info['p'];

            if( $line_end === false )
            {
                $this->info['p'] = $this->info['length'];
                return '' . substr( $this->info['content'], $p );
            }
            else
            {
                $this->info['p'] = $line_end + strlen( self::EOL );
                return '' . substr( $this->info['content'], $p, $trim ? $line_end : $this->info['p'] );
            }
        }
        function read_bytes( $bytes )
        {
            $data = $this->read( $bytes );
            $return = array();

            for( $i = 0, $l = strlen( $data ); $i < $l; $i++ )
            {
                $return[] = ord( $data[$i] );
            }

            return $return;
        }

        function write( $data )
        {
            if( $this->info['name'] != self::VOID )
            {
                if( $this->info['name'] != self::MEMORY && !( $this->info['mode'] & self::WRITE ) )
                {
                    throw new WriteError( $this->info['name'] );
                }

                list($begin,$end) = array( substr( $this->info['content'],0, $this->info['p'] ), substr( $this->info['content'], $this->info['p'] ) );

                $this->info['p'] = strlen( $begin . $data );

                $this->info['content'] = $begin . $data . $end;

                if( !( $this->info['mode'] & self::BINARY ) )
                {
                    $this->fix_eol();
                }

                $this->info['length'] = strlen( $this->info['content'] );
            }

            return $this;
        }
        function writeln( $data )
        {
            return $this->write( $data . self::EOL );
        }
        function write_bytes()
        {
            $data = '';
            foreach( func_get_args() as $byte )
            {
                $data .= chr( $byte );
            }
            return $this->write( $data );
        }

        function seek( $byte )
        {
            if( $this->info['name'] != self::VOID && is_numeric( $byte ) )
            {
                if( $byte >= $this->info['length'] )
                {
                    $this->info['p'] = $this->info['length'];
                }
                else if( $byte >= 0)
                {
                    $this->info['p'] = (int)$byte;
                }
                else
                {
                    $this->info['p'] = $this->info['length'] - 1;
                }
            }

            return $this;
        }
        function start()
        {
            return $this->seek( 0 );
        }
        function end()
        {
            return $this->seek( -1 );
        }

        function pos()
        {
            return $this->info['p'];
        }

        function size()
        {
            return $this->info['length'];
        }

        function save( $return = false )
        {
            if( $this->info['name'] == self::VOID || $this->info['name'] == self::MEMORY )
            {
                return !!$return;
            }
            else
            {
                return file_put_contents( $this->info['path'] . DIRECTORY_SEPARATOR . $this->info['name'], $this->info['content'] );
            }
        }

        function destroy()
        {
            $this->info = array(
                'content'=>'',
                'path'=>'',
                'name'=>'',
                'length'=>0,
                'p'=>0,
                'mode'=>1
            );
        }
    }

?>
