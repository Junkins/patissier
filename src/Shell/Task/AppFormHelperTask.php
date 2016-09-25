<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\SimpleBakeTask;

class AppFormHelperTask extends SimpleBakeTask
{
    public $pathFragment = 'View/Helper/';

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
