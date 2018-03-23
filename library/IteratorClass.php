<?php
namespace Acme;
use Iterator;              
                class IteratorClass implements Iterator {
                    
                    protected $array = [];

                    function __construct($array) {
                        if(is_array($array)){
                            $this->array = $array;
                        }
                    }
                    
                    public function current() {
                        return current($this->array);                        
                    }
                    
                    public function key() {
                        return key($this->array);                        
                    }
                    
                    public function next() {
                        return next($this->array);                        
                    }
                    
                    public function valid() {
                        return $this->current() !== FALSE;
                    }
                    
                    public function rewind() {
                        reset($this->array);                        
                    }
                    
                }
                
                
                
               