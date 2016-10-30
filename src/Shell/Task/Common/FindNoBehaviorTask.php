<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class FindNoBehaviorTask extends CoreBakeTask
{
    public $pathFragment = 'Model/Behavior/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'find_no_behavior';
        parent::main($name);
    }

    public function name()
    {
        return 'find_no_behavior';
    }

    public function fileName($name)
    {
        return 'FindNoBehavior.php';
    }

    public function template()
    {
        return '/Model/Behavior/find_no_behavior';
    }
}