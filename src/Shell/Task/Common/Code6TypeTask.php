<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class Code6TypeTask extends CoreBakeTask
{
    public $pathFragment = 'Database/Type/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'code_6_type';
        parent::main($name);
    }

    public function name()
    {
        return 'code_6_type';
    }

    public function fileName($name)
    {
        return 'Code6Type.php';
    }

    public function template()
    {
        return 'Database/Type/code_6_type';
    }
}