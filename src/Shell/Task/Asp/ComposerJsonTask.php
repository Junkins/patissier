<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class ComposerJsonTask extends CoreBakeTask
{
    public $pathFragment = '../';
    public $bakeTemplateClass = 'asp';

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
        return 'composer_json';
    }
}