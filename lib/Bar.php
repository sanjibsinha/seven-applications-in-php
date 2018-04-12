<?php
namespace Sanjib;

class Bar {
    protected $name;
    protected $task;
    function __construct($name) {
        $this->name = $name;
        echo $this->name;
    }
    function doThis($task) {
        $this->task = $task;
        echo $this->task;
        return $this;
    }
    function taskComplete() {
        echo 'Okay. Task completed.';
    }    

}

