<?php
require_once "animal.php";
    class ape extends Animal{
        public function __construct($name, $legs = 2, $cold_blooded = "no"){
            $this-> name = $name;
            $this-> legs = $legs;
            $this-> cold_blooded = $cold_blooded;

        }
       public function ayam(){

           echo "Auoooo";
}
}
?>
