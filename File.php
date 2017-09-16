<?php
class File
{
    public $filename = 'db.txt';
    public $content='intx0x80';
    public function __destruct()


  {
        file_put_contents($this->filename,$this->content);
    }
}
?>


