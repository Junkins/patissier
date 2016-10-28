<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminAppUrlHelperTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'View/Helper/Admin/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_url_helper';
        parent::main($name);
    }

    public function name()
    {
        return 'app_url_helper';
    }

    public function fileName($name)
    {
        return 'AppUrlHelper.php';
    }

    public function template()
    {
        return 'View/Helper/app_url_helper';
    }
}
