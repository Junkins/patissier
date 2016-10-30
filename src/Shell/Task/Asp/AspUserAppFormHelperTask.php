<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserAppFormHelperTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'View/Helper/User/';

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
        return '/View/Helper/app_form_helper';
    }
}