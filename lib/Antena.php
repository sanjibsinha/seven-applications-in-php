<?php
namespace Sanjib;

interface AntenaInterface {
    function giveSignal($device);    
}

class Antena implements AntenaInterface {
    protected $signal ="Giving signal.";
    function giveSignal($signal) {
        $this->signal = $signal;
        return $signal;
    }
}