<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\SimpleBakeTask;

/**
 * Task for the wrapper creation of AppClass
 */
class AppBakeTask extends SimpleBakeTask
{
    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app';
        parent::main($name);
    }

    public function name(){}

    public function fileName($name){}

    public function template(){}
}