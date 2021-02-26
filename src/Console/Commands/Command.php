<?php

namespace Anchour\Theme\Installer\Console\Commands;

use Illuminate\Console\Command as BaseCommand;

/**
 * This is intentionally empty - if we need to extend functionality to all
 * commands in the future, we'll do so here, e.g. command validation, etc.
 *
 * Class Command
 * @package Anchour\Theme\Installer\Console\Commands
 */
abstract class Command extends BaseCommand
{

    public function __construct()
    {
        $this->root = getenv('SAGE_ROOT') ?: getcwd();
        $this->packageRoot = dirname(\Composer\Factory::getComposerFile());
        $this->name = $this->name ?: strtolower(str_replace([__NAMESPACE__.'\\', 'Command'], '', get_class($this)));
        $this->setHelp($this->help ?: $this->description);

        parent::__construct();
    }
}