<?php
class Animal
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name .'<br>';
        $this->legs = 2 ."<br>";
        $this->cold_blooded = 'false <br>';
    }
}
?>




