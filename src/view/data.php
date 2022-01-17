<?php 
    require_once('Menu.php');
    require_once('drink.php');
    require_once('food.php');
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

?>