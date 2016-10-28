<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminAppFormHelperTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'View/Helper/Admin/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_form_helper';
        parent::main($name);
    }

    public function name()
    {
        return 'app_form_helper';
    }

    public function fileName($name)
    {
        return 'AppFormHelper.php';
    }

    public function template()
    {
        return 'View/Helper/app_form_helper';
    }
}
