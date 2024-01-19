<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../bootstrap/bootstrap.php';

$app = AppFactory::create();

require __DIR__ . '/../app/routes/api.php';


$app->run();