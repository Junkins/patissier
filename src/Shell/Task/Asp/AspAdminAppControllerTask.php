<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

/**
 * AspAdminAppControllerTask
 */
class AspAdminAppControllerTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'Controller/Admin/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'admin_app_controller';
        parent::main($name);
    }

    public function name()
    {
        return 'admin_app_controller';
    }

    public function fileName($name)
    {
        return 'AdminAppController.php';
    }

    public function template()
    {
        return 'Controller/app_controller';
    }
}
