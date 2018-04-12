<?php
namespace Sanjib;
class FormShow {
               
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
                             
               function ShowForm() {
                   
                        echo $this->array['method'];
                        echo $this->array['divOpenTag'];
                        echo $this->array['label'];
                        echo $this->array['age'];
                        echo $this->array['hide'];
                        echo $this->array['submit'];
                        echo $this->array['divCloseTag'];
                        echo $this->array['formClose'];
               }
                
}
