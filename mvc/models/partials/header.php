<?php require_once "mvc/models/Shoppingcart.php"; ?>

<div class="background-wrap">
    <div class="header">

        <div class="inner">

            <div class="logo-wrap">
                <a href="index.php" class="logo">
                    <i class="fas fa-dice-d8"></i>GamePanel
                </a>
            </div>

            <nav class="nav">
                <div class="nav__item item-sale">
                    <a href="" class="nav__item-link">
                        Item box sale <img src="./assets/images/header/case.png" alt="Item case" class="nav__item-image" />
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

    <div class="slider">

        <div class="inner">
            <div class="slider__content-wrap">
                <div class="slider__label">Complete remaster</div>
                <h3 class="slider__title">Pangar</h3>
                <h5 class="slider__title-sub">Aether Charged </h5>
                <p class="slider__paragraph">The campsite was utterly wrecked by the time Kat arrived. The Ramsgate scouting party was lucky they weren't in the same condition. One survivor, a long-retired slayer who hailed from the northern reaches, called it the mysterious behemoth a Pangar. She swore it shouldn’t be this far south. Kat had to agree. A green apprentice could have followed the trail. </p>
                <a href="#" class="slider__button button-transparent">Pre-order now</a>
            </div>
        </div>

        <div class="keyart">
            <img class="keyart__image" src="assets/images/header/small-popup.jpg" alt="KeyArt">
            <div class="keyart__text">25% sale on all dyes</div>
        </div>

    </div>
</div>