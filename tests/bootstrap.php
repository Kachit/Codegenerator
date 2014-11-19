<?php
/* @var Composer\Autoload\ClassLoader $autoloader */
$autoloader = include __DIR__ . '/../vendor/autoload.php';
$autoloader->addPsr4('Kachit\Codegenerator', __DIR__ . '/../src');
$autoloader->addPsr4('Kachit\Codegenerator\Test', __DIR__);

$class = new Kachit\Codegenerator\Entity\Classes();
