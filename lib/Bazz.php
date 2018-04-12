<?php
namespace Sanjib;

class Bazz {
    public $array = [
        "name"=>"Sanjib",
        "age"=>"552"
    ];
    function deliverJob() {
        $foo = new Foo();
        $bar = new Bar("Bar");
        $foo->sendMessage($bar);
    }

}

