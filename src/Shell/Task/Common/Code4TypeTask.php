<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class Code4TypeTask extends CoreBakeTask
{
    public $pathFragment = 'Database/Type/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'code_4_type';
        parent::main($name);
    }

    public function name()
    {
        return 'code_4_type';
    }

    public function fileName($name)
    {
        return 'Code4Type.php';
    }

    public function template()
    {
        return 'Database/Type/code_4_type';
    }
}