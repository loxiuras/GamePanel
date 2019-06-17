<?php

class TemplateService
{
    protected $uri;
    protected $urlParts;

    private static $first = 0;
    private static $second = 1;
    private static $templateKey = 'controller';
    private static $templateUrl = 'url';

    public function __construct( String $uri )
    {
        $this->setUri($uri);
    }

    public function printTemplate()
    {
        $splitUri = $this->splitUri();
        $this->setUriForController( $splitUri );
        $this->printTemplateFromUrl();
    }

    private function splitUri()
    {
        $splitUri = explode("/", $this->uri);
        array_splice($splitUri,0,1);
        return $splitUri;
    }

    private function setUriForController( $uri )
    {
        $parts = [];
        if(!empty($uri) && count($uri)) {
            foreach($uri as $key => $url) {
                $parts[$key][self::$templateKey] = $this->getControllerOfUrl( $url );
                $parts[$key][self::$templateUrl] = $url;
            }
        }
        $this->urlParts = $parts;
    }

    private function getControllerOfUrl( String $url )
    {
        switch($url)
        {
            case "categories": $controller = "category"; break;
            case "products": $controller = "product"; break;
            default: $controller = "page"; break;
        }

        return $controller;
    }

    private function printTemplateFromUrl()
    {
        $templateKey = $this->urlParts[self::$first][self::$templateKey];
        $templateUrl = $this->urlParts[self::$first][self::$templateUrl];

        switch($templateKey) {
            case 'product':

                $partialData = [];
                $partialData['productName'] = $this->urlParts[self::$second][self::$templateUrl];
                require 'mvc/models/templates/productpage.php';

                break;
            case 'category':

                break;
            case 'page':

                switch($templateUrl) {
                    default:
                        require_once "mvc/models/templates/homepage.php";
                        break;
                }

                break;
        }
    }

    private function setUri( String $uri )
    {
        $this->uri = $uri;
    }

    private function getUri()
    {
        return $this->uri;
    }
}