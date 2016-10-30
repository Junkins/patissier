<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class ComposerJsonTask extends CoreBakeTask
{
    public $pathFragment = '../';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'composer_json';
        parent::main($name);
    }

    public function name()
    {
        return 'composer_json';
    }

    public function fileName($name)
    {
        return 'composer.json';
    }

    public function template()
    {
        return '/composer_json';
    }
}