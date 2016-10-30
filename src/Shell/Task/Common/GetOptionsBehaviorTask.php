<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class GetOptionsBehaviorTask extends CoreBakeTask
{
    public $pathFragment = 'Model/Behavior/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'get_options_behavior';
        parent::main($name);
    }

    public function name()
    {
        return 'get_options_behavior';
    }

    public function fileName($name)
    {
        return 'GetOptionsBehavior.php';
    }

    public function template()
    {
        return '/Model/Behavior/get_options_behavior';
    }
}