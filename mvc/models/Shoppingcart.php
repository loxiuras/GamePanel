<?php
require_once "Session.php";

class Shoppingcart extends Session
{
    private static $shoppingCart = 'shoppingCart';
    public $articleNumber;

    public function __construct()
    {
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

    public function addProductToShoppingCart( String $articleNumber, int $amount ): void
    {
        $this->setAddedShoppingCartArticle( $articleNumber );
        if($this->productExistsInShoppingCart()) {
            $this->updateArticle( $amount );
        } else {
            $this->addArticle( $amount );
        }
    }

    public function setAddedShoppingCartArticle( String $articleNumber ): void
    {
        $this->articleNumber = !empty($articleNumber) ? $articleNumber : "";
    }

    public function productExistsInShoppingCart(): bool
    {
        return !empty($_SESSION[self::$shoppingCart][$this->articleNumber]);
    }

    public function updateArticle( int $amount ): void
    {
        $currentProductAmount = $_SESSION[self::$shoppingCart][$this->articleNumber]['amount'];
        $_SESSION[self::$shoppingCart][$this->articleNumber]['amount'] = ($currentProductAmount + $amount);
    }

    public function addArticle( int $amount ): void
    {
        $_SESSION[self::$shoppingCart][$this->articleNumber] = ['amount' => $amount];
    }

    public function deleteProductFromShoppingCart( String $articleNumber )
    {
        $this->setAddedShoppingCartArticle( $articleNumber );
        if($this->productExistsInShoppingCart()) {
            $this->deleteArticle( $articleNumber );
        }
    }

    public function deleteArticle( String $articleNumber )
    {
        unset($_SESSION[self::$shoppingCart][$articleNumber]);
    }
}