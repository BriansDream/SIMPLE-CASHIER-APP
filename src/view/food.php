<?php
    require_once('Menu.php');

    class Food extends Menu {

        private $spiciness;

        public function __construct($image, $foodName, $price, $spiciness )
        {   
            // memanggil parent method
            parent::__construct($image,$foodName,$price);
            $this->spiciness = $spiciness;
        }

        public function getSpiciness(){
            return $this->spiciness;
        }

    

    }

?>