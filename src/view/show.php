<?php
require_once('data.php');
$name = $_GET["name"];
require_once('review.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show page php</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            margin:  0 auto;
            max-width: 1440;
        }
        img {
            border-radius: 30px;
            width: 300px;
            height: 300px;
        }
    </style>

</head>
<body>
    
    <?php $menuClicked =  Menu::findByName($menus,$name) ?>
        <section style="display:flex; flex-direction:column; padding:10px; text-align:center">

        <div class="image-container">
        <img src="<?php echo $menuClicked->getImage() ?>" >
        </div>
        <div style="margin-top:10px;">
            <h1>
                <?php echo $menuClicked->getFoodName() ?>
            </h1>
        </div>

        <div>
            <h3>
                    Rp.<?php echo $menuClicked->getPrice(); ?>
            </h3>
        </div>
        </section>

        <section>
            <div class="left-content">
            <div>
                <h1>
                    Ulasan
                </h1>
            </div>
            </div>
            <?php foreach($menuReviews as $menuReview): ?>
                <?php foreach($menuReview as $menu): ?>
                    <?php if($menu->getMenuName() == $name):  ?>
                        <?php $user =  $menu->getUser($users) ?>
                    
            <div class="right-content">
            <div>
                <?php if($user->getGender() == "Pria"): ?>
                <h1>👨 Name:
                    <?php echo $user->getName() ?>
                </h1>
                <?php else: ?>
                    <h1>👩 Name:
                    <?php echo $user->getName() ?>
                </h1>
                <?php endif ?>
            </div>
        
            <div>
                <h1>Review:
                    <?php echo $menu->getBodyReview()  ?>
                </h1>
                </div>
            </div>

            <?php endif ?>
            <?php endforeach ?>
        <?php endforeach ?>
       
 
        </section>
</body>
</html>