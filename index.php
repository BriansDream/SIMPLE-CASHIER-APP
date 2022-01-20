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
        <div class="title-menu">
            <h1>
               Jumlah item: <?php echo Menu::getCountMenu()?>
            </h1>
        </div>
            <div id='content'>
            <?php foreach($menus as $menu): ?>
              
                <section>
                    <div class="img-container">
                    <img src="<?php echo $menu->getImage()  ?>" alt="">
                    </div>

                    <div class="food-name-container">
                    <a href="./src/view/show.php?name=<?php echo $menu->getFoodName() ?>">
                        <h1>
                            <?php echo $menu->getFoodName() ?>
                        </h1>
                        </a>
                    </div>

                    <div class="food-price-container">
                        <h2>
                            Rp.<?php echo $menu->getPrice() ?> /pcs
                        </h2>
                    </div>
                    <?php if($menu instanceof Drink): ?> 
                        <div class="drink-type-container" style="margin-bottom: 10px;">
                        <h2>
                            Jenis minuman : <?php echo $menu->getType() ?>
                        </h2>
                    </div>
                        <?php else: ?>

                            <div class="food-spiciness-container" style="margin-bottom: 10px;">
                        <h2>
                            Level kepedasan : <?php echo $menu->getSpiciness() ?>
                        </h2>
                    </div>

                    <?php endif ?>
                  
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