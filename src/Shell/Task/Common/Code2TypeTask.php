<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class Code2TypeTask extends CoreBakeTask
{
    public $pathFragment = 'Database/Type/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'code_2_type';
        parent::main($name);
    }

    public function name()
    {
        return 'code_2_type';
    }

    public function fileName($name)
    {
        return 'Code2Type.php';
    }

    public function template()
    {
        return 'Patissier.Database/Type/code_2_type';
    }
}