<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class Code5TypeTask extends CoreBakeTask
{
    public $pathFragment = 'Database/Type/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'code_5_type';
        parent::main($name);
    }

    public function name()
    {
        return 'code_5_type';
    }

    public function fileName($name)
    {
        return 'Code5Type.php';
    }

    public function template()
    {
        return 'Database/Type/code_5_type';
    }
}