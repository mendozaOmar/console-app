<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SpeakCommand extends Command
{
    protected function configure()
    {
        $this->setName('speak')
            ->setDescription('Speak a message')
            ->addArgument('message', InputArgument::REQUIRED, "What message would I speak?")
            ->addOption('language');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        exec('say ' . $input->getArgument('message'));

        $output->writeln('All done');
        return 0;
    }
}