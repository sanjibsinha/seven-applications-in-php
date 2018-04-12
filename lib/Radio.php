<?php
namespace Sanjib;

class Radio {
    protected $knob;
    protected $signal;
    protected $sound;
    protected $data = [];
    
    function __construct(Power $knob) {
        $this->knob = $knob;
        return $this;
    }
    
    function switchOn($knob) {
        $this->knob = $knob;
        $this->knob->plugIn("producing power...");
        return $this;
    }
    
    function getSignal(Antena $signal) {
        $this->signal = $signal;
        $signal->giveSignal("producing signal...");
        return $this;
    }
    
    function produceSound(Speaker $sound) {
        $this->sound = $sound;
        return $sound->giveSound("Radio is playing...");
    }
    
    function setData($data) {
        $this->data = $data;
    }
    function getData() {
        return $this->data;
    }
}