<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Zed\Application\Communication\Console;

use Spryker\Zed\Application\Business\ApplicationFacade;
use Spryker\Zed\Console\Business\Model\Console;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @method ApplicationFacade getFacade()
 */
class BuildNavigationConsole extends Console
{

    const COMMAND_NAME = 'application:build-navigation-cache';
    const DESCRIPTION = 'Build the navigation tree';

    /**
     * @return void
     */
    protected function configure()
    {
        $this->setName(self::COMMAND_NAME);
        $this->setDescription(self::DESCRIPTION);

        parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getMessenger()->info('Build navigation cache');
        $this->getFacade()->writeNavigationCache();
    }

}
