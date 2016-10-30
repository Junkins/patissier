<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserTopsControllerTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Controller/User/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'top_controller';
        parent::main($name);
    }

    public function name()
    {
        return 'top_controller';
    }

    public function fileName($name)
    {
        return 'TopsController.php';
    }

    public function template()
    {
        return '/Controller/top_controller';
    }
}