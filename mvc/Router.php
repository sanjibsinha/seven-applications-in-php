<?php

/* 
 * I need to practice passing array through function
 * and returning value accordingly
 */

$route = [
    "/" => "index.php",
    "/about" => "about.php"
];


class Router {
    
    public $array = [];
    public $url;
    public $destination;

      
    function define($array) {
        $this->array = $array;
        return $this->array;
    }
    
    function redirect($url) {
        
        $this->url = $url;
        
        if(array_key_exists($this->url, $this->array)){
            
            return $this->array["{$this->url}"];
        }
        else{
            
            throw new Exception;
                    
        }
                
     }
}

$router = new Router;

$router->define($route);

header("Location {$router->redirect("/about")}");