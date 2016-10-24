<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class Code3TypeTask extends CoreBakeTask
{
    public $pathFragment = 'Database/Type/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'code_3_type';
        parent::main($name);
    }

    public function name()
    {
        return 'code_3_type';
    }

    public function fileName($name)
    {
        return 'Code3Type.php';
    }

    public function template()
    {
        return 'Patissier.Database/Type/code_3_type';
    }
}