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

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use JJs\Bundle\GeonamesBundle\Data\TimezoneLoader;
use JJs\Common\Console\OutputLogger;

/**
 * Load Timezones Command
 *
 * Loads timezones from a geonames.org data file.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class LoadTimezonesCommand extends ContainerAwareCommand
{
    /**
     * Configures this command
     */
    protected function configure()
    {
        $this
            ->setName('geonames:load:timezones')
            ->setDescription('Loads timezones into the timezone repository from a geonames.org data file')
            ->addArgument('file', InputArgument::OPTIONAL, "Data file", TimezoneLoader::DEFAULT_FILE);
    }

    /**
     * Executes the load timezones command
     * 
     * @param InputInterface  $input  Input interface
     * @param OutputInterface $output Output interface
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getContainer();
        $loader = $container->get('geonames.timezone.loader');

        $file = $input->getArgument('file');
        $log = new OutputLogger($output);

        $loader->load($file, $log);
    }
}