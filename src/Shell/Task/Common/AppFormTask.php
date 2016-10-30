<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class AppFormTask extends CoreBakeTask
{
    public $pathFragment = 'Model/Form/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_form';
        parent::main($name);
    }

    public function name()
    {
        return 'app_form';
    }

    public function fileName($name)
    {
        return 'AppForm.php';
    }

    public function template()
    {
        return '/Form/app_form';
    }
}