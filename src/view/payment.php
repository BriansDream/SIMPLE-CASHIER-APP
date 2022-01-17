<?php 
    require_once('data.php');
    require_once('Menu.php');
    $totalPayment = 0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="../../public/css/payment.css">
</head>
<body>
    
    <main>
    <div id="content">
        <?php foreach($menus as $menu): 
            $quantity = $_POST[$menu->getFoodName()];
            $menu->setOrderCount($quantity);
            $totalPayment += $menu->getTotalPrice();
            ?>
            <section>
            <div class="left-content">
            
            <div class="left">
            <div class="img-container">
                <img src="<?php echo $menu->getImage() ?>" alt="">
            </div>
            </div>
            <div class="right">
            <div class="food-name-container">
                <h1>
                    <?php echo $menu->getFoodName() ?>
                </h1>
            </div>

            <div class="price-container">
                <h2>
                    Rp.<?php echo $menu->getPrice() ?>/pcs
                </h2>
            </div>

            <div class="qty-container">
                <h3>
                    Quantity: <?php echo $menu->getOrderCount() ?>
                </h3>
            </div>
            </div>

            </div>
            <div class="right-content">
                <div>
                <h1>
                    Total price Rp.<?php echo $menu->getTotalPrice() ?>
                </h1>
                </div>
            </div>
            
            </section>
        <?php endforeach ?>

            <section class="total-payment-container">
            <div class="left-content">

            </div>
            <div class="right-content">
                    <div>
                        <h1>
                            Total Payment: Rp.<?php echo $totalPayment ?>
                        </h1>
                    </div>
            </div>
            </section>

    </div>
    </main>

</body>
</html>