<?php 
    require_once('Menu.php');

    $juice = new Menu("https://images.unsplash.com/photo-1568909344668-6f14a07b56a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8anVpY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60",
        "Juice",8000);
    $coffee = new Menu("https://images.unsplash.com/photo-1523942839745-7848c839b661?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29mZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60",
    "Coffee",10000);

    $menus = array($juice,$coffee);

?>