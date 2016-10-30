<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class CodeTypeTask extends CoreBakeTask
{
    public $pathFragment = 'Database/Type/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'code_type';
        parent::main($name);
    }

    public function name()
    {
        return 'code_type';
    }

    public function fileName($name)
    {
        return 'CodeType.php';
    }

    public function template()
    {
        return '/Database/Type/code_type';
    }
}