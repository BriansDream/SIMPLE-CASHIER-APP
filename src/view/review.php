<?php

        class Review{

            // property yang menentukan ulasan menu
            private $menuName;
            // property untuk konten ulasan
            private $body;

            // Stored user that wrote review
            private $userName;

            public function __construct($menuName,$body,$userName) {   
                $this->menuName = $menuName;
                $this->body = $body;
                $this->userName = $userName;
            
            }

            public function getBodyReview(){
                return $this->body;
            }
            public function getMenuName(){
                return $this->menuName;
            }

          

            public function getUser($users){
                foreach($users as $user) {
                    // get instance user dengan nama yang sama 
                    if($user->getName() == $this->userName) {
                        return $user;
                    }
                }
            }



        }
        
?>