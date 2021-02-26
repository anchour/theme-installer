<?php
/**
 * Created by PhpStorm.
 * User: robitaille
 * Date: 2/26/21
 * Time: 4:50 PM
 */

namespace Anchour\Theme\Installer;


use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\OutputStyle;

class Application extends BaseApplication
{
    public function run(InputInterface $input = null, OutputInterface $output = null)
    {
        return parent::run($input, $output);
    }
}