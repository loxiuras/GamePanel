<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once "mvc/models/FrontService.php";
require_once "mvc/models/TemplateService.php";

$FrontService = new FrontService();
$FrontService->setFrontPageSettings();

$uri = $FrontService->getFrontUrl();

$TemplateService = new TemplateService( $uri );
$TemplateService->printTemplate();