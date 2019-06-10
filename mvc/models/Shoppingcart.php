<?php
require_once "Session.php";

class Shoppingcart extends Session
{

    public function __construct()
    {
        parent::__construct();
    }

    public function buildShoppingCartAmount(): String
    {
        $html = "";
        $shoppingCartItems = $this->getShoppingCartItems();

        if(!empty($shoppingCartItems)) {

            $html .= "<div class='shoppingcartAmount'>";
            $html .= count($shoppingCartItems);
            $html .= "</div>";

        }
        return $html;
    }

}