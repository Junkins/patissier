<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class FindIgnoreBehaviorTask extends CoreBakeTask
{
    public $pathFragment = 'Model/Behavior/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'find_ignore_behavior';
        parent::main($name);
    }

    public function name()
    {
        return 'find_ignore_behavior';
    }

    public function fileName($name)
    {
        return 'FindIgnoreBehavior.php';
    }

    public function template()
    {
        return '/Model/Behavior/find_ignore_behavior';
    }
}