<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class TestCommand extends Command
{
    protected static $defaultName = 'app:test';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln([
            'This is a test Command',
            'You can do whatever you want while using this command',
            '============',
            '',
        ]);
        $output->writeln('User Input: ' . $input->getArgument('input'));

        return 0;
    }
}
