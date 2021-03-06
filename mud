#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

$containerBuilder = new ContainerBuilder();
// make container aware of console commands for autoconfigure
$containerBuilder->registerForAutoconfiguration(Command::class)->addTag('console.command');
$loader = new YamlFileLoader($containerBuilder, new FileLocator(__DIR__ . '/config'));
$loader->load('services.yaml');
$containerBuilder->compile();

$application = new Application('Mudder');


foreach ($containerBuilder->findTaggedServiceIds('console.command') as $serviceId => $tagAttributes) {
    /** @var Command $command */
    $command = $containerBuilder->get($serviceId);
    $application->add($command);
}

$application->run();
