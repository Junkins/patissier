<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class PhpCsTask extends CoreBakeTask
{
    public $pathFragment = '../';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'php_cs';
        parent::main($name);
    }

    public function name()
    {
        return 'php_cs';
    }

    public function fileName($name)
    {
        return '.php_cs';
    }

    public function template()
    {
        return 'php_cs';
    }
}