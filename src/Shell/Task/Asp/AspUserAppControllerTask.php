<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

/**
 * AspUserAppControllerTask
 */
class AspUserAppControllerTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Controller/User/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'user_app_controller';
        parent::main($name);
    }

    public function name()
    {
        return 'user_app_controller';
    }

    public function fileName($name)
    {
        return 'UserAppController.php';
    }

    public function template()
    {
        return '/Controller/app_controller';
    }
}