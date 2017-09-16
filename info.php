<?php

//http://127.0.0.1/info.php?u=O:4:"info":2:{s:3:"age";i:24;s:4:"name";s:8:"intx0x80";}


include 'File.php';

class info
{
    public $age = 0;
    public $name = '';

    public function __toString()

    {

        return   'welcome ' . $this->name . ' your age is ' . $this->age . ' years old. <br />';

    }

}

$o = unserialize($_GET['u']);

echo '<h1>'.$o;


?>
