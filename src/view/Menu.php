<?php

            class Menu {
                // create property with hak akses protected that can be access on parent class and child class 
                protected $image;
                protected $foodName;
                protected $price;
                protected $orderCount=0;
                private static $countMenu = 0;

                // create constructor funct
                public function __construct($image, $foodName, $price){
                    // fill property with value from parameter constructor
                    // this keyword akan merujuk ke objek / variable yang ada didalam class
                    $this->image = $image;
                    $this->foodName = $foodName;
                    $this->price = $price;
                    self::$countMenu++;
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
                public static function getCountMenu() {
                    return self::$countMenu;
                }

                public static function findByName($menus, $name){
                    foreach($menus as $menu) {
                        if($menu->getFoodName() == $name) {
                            return $menu;
                        }
                    }
                }

                public function getReviews($reviews) {
                    // create empty array
                    $reviewsForMenu = array();
                    foreach($reviews as $review) {
                        if($review->getMenuName() == $this->foodName) {
                            $reviewsForMenu[]=$review;
                        }
                    }
                    return $reviewsForMenu;
                }
             
            }
?>