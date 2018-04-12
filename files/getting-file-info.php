<h1>How to get File Information using stat() function</h1>
<?php

$filename = "file.txt";
$array = stat($filename);
echo '<pre>';
echo "The file device number is :" . $array['dev'] . "<br>";
echo "The file Inode number is :" . $array['ino'] . "<br>";
echo "The file userID of owner is :" . $array['uid'] . "<br>";
echo "The file group ID of owner is :" . $array['gid'] . "<br>";
echo "The file size is :" . $array['size'] . "<br>";
echo "The file time of last access is :" . $array['atime'] . "<br>";
echo "The file time of last modification is :" . $array['mtime'] . "<br>";

echo '<br>';

/*
$copy = "copy.txt";

if(copy($filename, $copy)){
    echo 'Copied ' . $filename;
}
else{
    echo 'Could not copy ' . $filename;
}
 * 
 * we can also delete any file 
 * by using unlink($copy) function
*/
echo '<br>';

?>

<h1>Writing to file</h1>

<?php
/*
$handle = fopen("data.txt", "w");

$text = "Creating\na\ntext file.\nadding\nsome\ntext...";

if(fwrite($handle, $text)==FALSE){
    echo 'Could not write to the file.';
}
else{
    echo 'Created data.txt';
}
*/

?>

<h1>Writing and Reading Binary files</h1>

<?php
/*
$number = 12;

$handle = fopen("data.dat", "wb");

if(fwrite($handle, pack("L", $number)) == FALSE){
    echo 'Could not write data.dat';
}
else{
    echo 'Created data.dat. and stored number.';
}
 * */
// we can also read the binary data 4 bytes long == "L"
// the length of a long integer

$handle = fopen("data.dat", "rb");
$data = fread($handle, 4);
$array = unpack("Ldata", $data);
echo "<pre>";
echo "Reading value from data.dat " . $array['data'];



