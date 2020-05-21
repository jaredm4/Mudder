<?php

namespace Mudder\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DrawMapCommand extends Command
{
    protected static string $defaultName = 'map:draw';

    protected function configure()
    {
        $this
            ->setDescription('Take a map resource and draw an ascii version of it.')
            ->setHelp('Map resources are three dimensional arrays.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $output->writeln('Hello, world.');

        return 0;
    }
}
