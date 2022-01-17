<?php
    require_once('Menu.php');

    // Inherit properties and method from parent class (Menu)
    class Drink extends Menu {
        // customisasi class Drink
        private $type; // property independent

        // overriding method from parent class
        public function __construct($image, $foodName,$price,$type)
        {
            // called contruct parent
            parent::__construct($image, $foodName, $price);
            $this->type=$type;
        }
    
    
        public function getType() {
            return $this->type;
        }

        // public function setType($type) {
        //     $this->type = $type;
        // }

    }
?>