<?php

class Session
{

    public $session;

    public function __construct()
    {
        $this->session = $this->defineSession();
    }

    private function defineSession()
    {
        return $_SESSION;
    }

    public function getShoppingCartItems()
    {
        return !empty($this->session['items']) ? $this->session['items'] : "";
    }

}