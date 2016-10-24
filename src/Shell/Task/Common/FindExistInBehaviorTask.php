<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class FindExistInBehaviorTask extends CoreBakeTask
{
    public $pathFragment = 'Model/Behavior/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'find_exist_in_behavior';
        parent::main($name);
    }

    public function name()
    {
        return 'find_exist_in_behavior';
    }

    public function fileName($name)
    {
        return 'FindExistInBehavior.php';
    }

    public function template()
    {
        return 'Patissier.Model/Behavior/find_exist_in_behavior';
    }
}