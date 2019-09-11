<?php

namespace SimplifiedMagento\FirstModule\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class HelloWorld extends Command
{
    /**
     * Class constructor.
     */
    public function configure()
    {
        $this->setName('training:helloworld')
            ->setDescription('The Command Just Prints <Hello World> To STD')
            ->setAliases(['t:hw']);
            
            $this->setDefinition([
                new InputArgument('name', InputArgument::OPTIONAL, 'The name of the Person', null, null)
            ]);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World, ' . $input->getArgument('name'));
    }
}