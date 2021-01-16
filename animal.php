<?php

    abstract class Animal {

        function __construct($name) {
            $this->name = $name;
        
        }
        public $name;

    }

    class Apa extends Animal {

        function __construct($name) {
            
            parent::__construct($name);

        }
        public $species = "Apa";
    }

?>