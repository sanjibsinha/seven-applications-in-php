<?php
namespace Sanjib;
class ExaminingCodeClass implements ExaminingInterface {
                    
                    public $counter = 0;
                    protected $name = "Sanjib";
                    private $age = 552;

                    function __construct() {                        
                                                
                    }
                    
                    function setCounter($counter) {
                        $this->counter = $counter;                       
                    }
                    
                    function getCounter() {
                        
                        return $this->counter++;
                        
                    }

}

interface ExaminingInterface {
                    
                    function setCounter($counter);
                    function getCounter();
                    
                }

