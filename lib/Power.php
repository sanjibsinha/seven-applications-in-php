<?php
namespace Sanjib;

interface PowerInterface {
    function plugIn($device);
}

class Power implements PowerInterface {    
    protected $device = "Plugged in.";    
    function plugIn($device) {
        $this->device = $device;
        return $device;
    }
}
