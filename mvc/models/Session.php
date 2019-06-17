<?php

class Session
{
    public function getShoppingCartItems()
    {
        return !empty($_SESSION['shoppingCart']) ? $_SESSION['shoppingCart'] : "";
    }

    public function setFrontSession(): void
    {
        $_SESSION['front'] = [];
        $_SESSION['front']['host'] = $_SERVER['HTTP_HOST'];
        $_SESSION['front']['protocol'] = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    }

    public function getFrontSession()
    {
        return !empty($_SESSION['front']) ? $_SESSION['front'] : [];
    }

}