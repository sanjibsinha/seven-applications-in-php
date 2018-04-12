<?php
namespace Sanjib;
class ArrayCollection implements \Countable, \JsonSerializable {
    
    public $array = [
                       
                       'method' => '<form method="POST" action="validation-checking.php">',
                       'divOpenTag' => '<div class="form-group">',
                       'label' => '<label for="exampleText">Enter your Age</label>',
                       'age' => '<input name="age" type="text">',
                       'hide' => '<input name="hid" type="hidden" value="repeat visit">',
                       'submit' => '<button type="submit" class="btn btn-primary">Submit</button>',
                       'divCloseTag' => '</div>',
                       'formClose' =>'</form>'
                       
                   ];

    function __construct() {
        //return $this->array;
    }
    
    function count() {
        return count($this->array);
    }
    
    function jsonSerialize() {
        return json_encode($this->array);
    }
    
    function add_Only_Value_Where_Key_Is_Automatically_Set($value) {
        $this->array[] = $value;
    }
    
    function add_Key_And_Value($key, $value) {
        $this->array[$key] = $value;
    }

}
