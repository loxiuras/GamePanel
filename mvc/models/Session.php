<?php

class Session
{
    public function getShoppingCartItems()
    {
        return !empty($_SESSION['shoppingCart']) ? $_SESSION['shoppingCart'] : "";
    }

}