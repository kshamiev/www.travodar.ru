<?php
/**
 * The entry point to the application.
 * Initialize and run.
 */
//echo "!!";
//$headers = getallheaders();
//print_r($headers);
// Including the class Zero_App
require __DIR__ . '/phpzero/zero/class/App.php';
Zero_App::Init();
//
//
//
Zero_App::ResponseJson($_SERVER);
//
