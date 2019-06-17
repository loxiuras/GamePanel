<?php
    require_once "mvc/models/Shoppingcart.php";
    $sliderDisabled = (!empty($partialData['disableSlider']));
    $backgroundClass = (!$sliderDisabled) ? " image" : "";
?>

<div class="background-wrap<?php echo $backgroundClass; ?>">
    <div class="header">

        <div class="inner">

            <div class="logo-wrap">
                <a href="//<?php echo $_SESSION['front']['host']; ?>" class="logo">
                    <i class="fas fa-dice-d8"></i>GamePanel
                </a>
            </div>

            <nav class="nav">
                <div class="nav__item item-sale">
                    <a href="" class="nav__item-link">
                        Item box sale <img src="/assets/images/header/case.png" alt="Item case" class="nav__item-image" />
                    </a>
                </div>
                <div class="nav__item login">
                    <a href="" class="nav__item-link login">
                        <div class="icon"><i class="fas fa-user"></i></div>
                        <div class="text">Login</div>
                    </a>
                </div>
                <div class="nav__item">
                    <a href="" class="nav__item-link shoppingcart">
                        <i class="fal fa-shopping-cart"></i>
                        <?php
                            $Shoppingcart = new Shoppingcart();
                            echo $Shoppingcart->buildShoppingCartAmount();
                        ?>
                    </a>
                </div>
            </nav>

        </div>
    </div>

    <?php
    if(!$sliderDisabled) {
        require_once "slider.php";
    }
    ?>
</div>