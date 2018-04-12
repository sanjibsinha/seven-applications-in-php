<?php
namespace Sanjib;

interface SpeakerInterface {
    function giveSound($sound);
}

class Speaker implements SpeakerInterface {
    protected $sound = "I am producing sound.";
    function giveSound($sound) {
        $this->sound = $sound;
        return $sound;
    }
}