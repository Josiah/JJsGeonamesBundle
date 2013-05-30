<?php

namespace JJs\Bundle\GeonamesBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use JJs\Bundle\GeonamesBundle\Data\CountryLoader;
use JJs\Common\Console\OutputLogger;

/**
 * Load Countries Command
 *
 * Loads the countries into the country repository from a data file in the
 * GeoNames.org format.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class LoadCountriesCommand extends ContainerAwareCommand
{
    /**
     * Configures this command
     */
    protected function config()
    {
        $this
            ->setName('geonames:load:countries')
            ->setDescription('Loads countries into the country repository from a data file')
            ->addArgument('file', InputArgument::OPTIONAL, "Data file", CountryLoader::DEFAULT_FILE);
    }

    /**
     * Executes the load countries command
     * 
     * @param InputInterface  $input  Input interface
     * @param OutputInterface $output Output interface
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getContainer();
        $loader = $container->get('geonames.country.loader');

        $file = $input->getArgument('file');
        $log = new OutputLogger($output);

        $loader->load($file, $log);
    }
}