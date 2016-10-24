<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class BowerJsonTask extends CoreBakeTask
{
    public $pathFragment = '../';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'bower_json';
        parent::main($name);
    }

    public function name()
    {
        return 'bower_json';
    }

    public function fileName($name)
    {
        return 'bower.json';
    }

    public function template()
    {
        return 'Patissier.bower_json';
    }
}