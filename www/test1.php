<?php
/**
 * The entry point to the application.
 * Initialize and run.
 */

// Including the class Zero_App
require __DIR__ . '/phpzero/zero/class/App.php';
Zero_App::Init();

$data = Zero_App::RequestJson('GET', 'http://travodar.ru/test.php', '');
pre($data);

$data = Zero_App::RequestJson('GET', 'http://travodar.ru/test.php', '', 'dev:dev');
pre($data);

$data = Zero_App::RequestJson('GET', 'http://travodar.ru/test.php', '', 'dev:dev', 'qwerty:zxcvbn');
pre($data);

$data = Zero_App::RequestJson('GET', 'http://travodar.ru/test.php', '', '', 'qwerty:zxcvbn');
pre($data);




$f = base64_decode('cXdlcnR5Onp4Y3Zibg==');
pre($f);