<?php
/* @var Composer\Autoload\ClassLoader $autoloader */
$autoloader = include __DIR__ . '/../vendor/autoload.php';
$autoloader->add('Kachit\Codegenerator\Test', __DIR__);

$class = new Kachit\Codegenerator\Entity\Classes();