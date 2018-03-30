# In a new file, instantiate the class so that you can display 3 different cats 
# and display the result using the previously created getInfo() method.

<?php

spl_autoload_register(
    function($namespace){  
        $filename = ($namespace.'.php');
        $filename = str_replace('\\', '/', $filename);
        $filename = _DIR_ . DIRECTORY_SEPARATOR . $filename;
        if(is_file($filename)){
            require_once $filename;
        }
    } 

class Chat extends Cat
{
    public function getInfo() {
        
    }
}

 $chat1 = new Cat();
 $chat2 = new Cat();
 $chat3 = new Cat();
 

?>