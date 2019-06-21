<?php
require_once "Session.php";

class Shoppingcart extends Session
{
    private static $shoppingCart = 'shoppingCart';
    public $articleNumber;
    public $productUrl;

    public function __construct()
    {
    }

    public function buildShoppingCartAmount(): string
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

    public function addProductToShoppingCart( string $articleNumber, int $amount, string $productUrl=""): void
    {
        $this->setAddedShoppingCartArticleNumber( $articleNumber );
        $this->setAddedShoppingCartProductUrl( $productUrl );
        if($this->productExistsInShoppingCart()) {
            $this->updateArticle( $amount );
        } else {
            $this->addArticle( $amount );
        }
    }

    public function setAddedShoppingCartArticleNumber( string $articleNumber ): void
    {
        $this->articleNumber = !empty($articleNumber) ? $articleNumber : "";
    }

    public function setAddedShoppingCartProductUrl( string $productUrl ): void
    {
        $this->productUrl = !empty($productUrl) ? $productUrl : "";
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
        $_SESSION[self::$shoppingCart][$this->articleNumber] = ['amount' => $amount, 'productUrl' => $this->productUrl];
    }

    public function deleteProductFromShoppingCart( string $articleNumber )
    {
        $this->setAddedShoppingCartArticleNumber( $articleNumber );
        if($this->productExistsInShoppingCart()) {
            $this->deleteArticle( $articleNumber );
        }
    }

    public function deleteArticle( string $articleNumber )
    {
        unset($_SESSION[self::$shoppingCart][$articleNumber]);
    }
}