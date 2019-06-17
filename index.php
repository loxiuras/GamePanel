<?php
session_start();
require_once "mvc/models/FrontService.php";
require_once "mvc/models/TemplateService.php";

$FrontService = new FrontService();
$FrontService->setFrontPageSettings();

$uri = $FrontService->getFrontUrl();

$TemplateService = new TemplateService( $uri );
$TemplateService->printTemplate();