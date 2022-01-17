<?php
    require_once('./src/view/data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Cashier App</title>
    <link rel="stylesheet" href="./public/css/index.css">
</head>
<body>
    
    <header>
        <div class="title-container">
                <h2>Cashier App</h2>
        </div>
    </header>

    <main>
            <div id='content'>
            <?php foreach($menus as $menu): ?>
                <section>
                    <div class="img-container">
                    <img src="<?php echo $menu->getImage()  ?>" alt="">
                    </div>

                    <div class="food-name-container">
                        <h1>
                            <?php echo $menu->getFoodName() ?>
                        </h1>
                    </div>

                    <div class="food-price-container">
                        <h2>
                            Rp.<?php echo $menu->getPrice() ?> /pcs
                        </h2>
                    </div>
                  
                    <form method="post" action="./src/view/payment.php">
                     
                    <input type="text" placeholder="Quantity" value="0" 
                    maxlength="10"
                    name="<?php echo $menu->getFoodName() ?>" class="form-qty">

                </section>

                <?php endforeach ?>

            </div>

                <input type="submit" value="order menu" class="btn-order-menu" >
            </form>
    </main>

</body>
</html>