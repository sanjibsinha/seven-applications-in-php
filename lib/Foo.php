<?php
namespace Sanjib;
class Foo {

    function sendMessage($bar) {
        $bar->doThis("Take an antacid.")->taskComplete();
        
        
        $reflector = new \ReflectionClass($bar);
        $barName = $reflector->getProperty("name");
        var_dump($barName);
        $barName->setAccessible(TRUE);
        $barName->setValue($bar, "New Bar");
        var_dump($barName->getValue($bar));
        /*
        * 
         * WE can change the name of Bar on the fly
         * by using ReflectionClass
         */
        
    }   
    

}

