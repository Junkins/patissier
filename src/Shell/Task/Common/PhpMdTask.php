<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class PhpMdTask extends CoreBakeTask
{
    public $pathFragment = '';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'phpmd';
        parent::main($name);
    }

    public function name()
    {
        return 'phpmd';
    }

    public function fileName($name)
    {
        return '.phpmd.xml';
    }

    public function template()
    {
        return 'Patissier.phpmd';
    }
}