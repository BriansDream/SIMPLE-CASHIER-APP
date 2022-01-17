<?php

            class Menu {
                // create property with hak akses protected that can be access on parent class and child class 
                protected $image;
                protected $foodName;
                protected $price;
                protected $orderCount=0;
                protected static $orderMenu = 0;

                // create constructor funct
                public function __construct($image, $foodName, $price){
                    // fill property with value from parameter constructor
                    // this keyword akan merujuk ke objek / variable yang ada didalam class
                    $this->image = $image;
                    $this->foodName = $foodName;
                    $this->price = $price;
                    self::$orderMenu++;
                }

                public function getImage() {
                    return $this->image;
                }

                public function getFoodName(){
                    return $this->foodName;
                }

                public function getPrice(){
                    return $this->price;
                }

             
                public  function getOrderCount() {
                    return $this->orderCount;
                }

                public function setOrderCount($orderCount) {
                    $this->orderCount = $orderCount;
                }

                public function getTotalPrice() {
                    return $this->getPrice() * $this->getOrderCount();
                }
                public static function getOrderMenu() {
                    return Menu::$orderMenu;
                }

             
            }
?>