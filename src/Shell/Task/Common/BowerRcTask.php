<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class BowerRcTask extends CoreBakeTask
{
    public $pathFragment = '../';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'bowerrc';
        parent::main($name);
    }

    public function name()
    {
        return 'bowerrc';
    }

    public function fileName($name)
    {
        return '.bowerrc';
    }

    public function template()
    {
        return 'bowerrc';
    }
}