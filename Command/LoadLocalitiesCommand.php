<?php
/**
 * Copyright (c) 2013 Josiah Truasheim
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */


namespace JJs\Bundle\GeonamesBundle\Command;

use JJs\Bundle\GeonamesBundle\Data\LocalityLoader;
use JJs\Bundle\GeonamesBundle\Export;
use JJs\Common\Console\OutputLogger;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Helper\TableHelper;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Load Localities Command
 *
 * Loads localities from a geonames.org data file.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class LoadLocalitiesCommand extends ContainerAwareCommand
{
    /**
     * Configures this command
     */
    protected function configure()
    {
        $this
            ->setName('geonames:load:localities')
            ->setDescription('Loads localities into the state and city repositories from a geonames.org data file')
            ->addArgument(
                'country', 
                InputArgument::OPTIONAL | InputArgument::IS_ARRAY,
                "Country to load the localities defaults to all countries")
            ->addOption(
                'info', null,
                InputOption::VALUE_NONE,
                "Prints information about the locality importer");
    }

    /**
     * Executes the load localities command
     * 
     * @param InputInterface  $input  Input interface
     * @param OutputInterface $output Output interface
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getContainer();
        $importer = $container->get('geonames.locality.importer');

        $countries = $input->getArgument('country');

        // Display importer information if requested
        if ($input->getOption('info')) {
            $table = $this->getHelper('table');
            $table->setLayout(TableHelper::LAYOUT_BORDERLESS);
            $table->setHeaders(['Feature', 'Repository']);

            foreach ($importer->getLocalityRepositories() as $feature => $repository) {
                $table->addRow([$feature, get_class($repository)]);
            }

            $table->render($output);

            return;
        }

        // Import the specified countries
        $importer->import($countries, new OutputLogger($output));
    }
}