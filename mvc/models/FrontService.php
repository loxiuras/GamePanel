<?php
require_once "Session.php";

class FrontService extends Session
{

    protected $FrontSession;

    public function __construct()
    {
        $this->FrontSession = $this->getFrontSession();
    }

    public function setFrontPageSettings()
    {
        if(empty($this->FrontSession) && !count($this->FrontSession)) {
            $this->setFrontSession();
        }
    }

    public function getFrontUrl()
    {
        return !empty($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : "/";
    }
}