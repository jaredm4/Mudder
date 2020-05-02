<?php

namespace Mudder\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
    protected static string $defaultName = 'mud:hello-world';

    protected function configure()
    {
        $this
            ->setDescription('Hello world sample to ensure configuration is setup correctly.')
            ->setHelp('Not much to see here.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello, world.');

        return 0;
    }
}