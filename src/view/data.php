<?php 
    require_once('Menu.php');
    require_once('drink.php');
    require_once('food.php');
    require_once('review.php');
    require_once('user.php');
    // $juice = new Menu("https://images.unsplash.com/photo-1568909344668-6f14a07b56a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8anVpY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60",
    //     "Juice",8000);
    // $coffee = new Menu("https://images.unsplash.com/photo-1523942839745-7848c839b661?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29mZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60",
    // "Coffee",10000);

    $juice = new Drink("https://images.unsplash.com/photo-1568909344668-6f14a07b56a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8anVpY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60",
        "Juice",8000,"Panas");
    $coffee = new Drink("https://images.unsplash.com/photo-1523942839745-7848c839b661?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29mZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60",
    "Coffee",10000,"Dingin");

    $mie = new Food("https://images.unsplash.com/photo-1612927601601-6638404737ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWllfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "Mie",10000,4);
    $sate = new Food("https://images.unsplash.com/photo-1620088676099-c709b5838922?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c2F0ZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60",
    "Sate",25000,2);


    $menus = array($juice,$coffee,$mie,$sate);

    // Instance Users
    $user1 = new User("Alex","Pria");
    $user2 = new User("Fuji","Wanita");
    $user3 = new User("Romi","Pria");
    $user4 = new User("Alex","Wanita");
    $users = array($user1,$user2,$user3,$user4);

    // instance review
    $review1 = new Review($juice->getFoodName(), "Jus-nya Mantap",$user1->getId());
    $review2 = new Review($coffee->getFoodName(), "Coffee Mantap",$user2->getId());
    $review3 = new Review($mie->getFoodName(), "Mie'nya kenyal",$user3->getId());
    $review4 = new Review($sate->getFoodName(), "Daging sate'nya lembut",$user1->getId());
    $review5 = new Review($juice->getFoodName(), "Jus'nya basi",$user4->getId());
    $reviews = array($review1,$review2,$review3,$review4,$review5);

    $juiceReviews =  $juice->getReviews($reviews);
    $coffeeReviews =  $coffee->getReviews($reviews);
    $mieReviews =  $mie->getReviews($reviews);
    $sateReviews =  $sate->getReviews($reviews);
    $menuReviews = array($juiceReviews,$coffeeReviews,$mieReviews,$sateReviews);

    
?>