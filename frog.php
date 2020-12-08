<?php 
class Frog
{
    public $frog;
    public function __construct($frog)
    {
        $this->name = $frog;
    }
    public function jump(){
        echo 'hop hop <br>';
    }
}

?>