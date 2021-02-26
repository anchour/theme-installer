<?php

namespace Anchour\Theme\Installer;

use Anchour\Theme\Installer\Console\Commands\CreateACFModulesCommand;

class Installer
{
    /**
     * @var Application
     */
    public $app;

    public function __construct()
    {
        $app = new Application('Anchour theme installer', '1.0.0');
        $app->add(new CreateACFModulesCommand());

        $this->app = $app;
    }
}
