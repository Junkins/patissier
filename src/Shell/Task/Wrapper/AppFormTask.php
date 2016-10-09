<?php
namespace Patissier\Shell\Task\Wrapper;

use Bake\Shell\Task\SimpleBakeTask;

class AppFormTask extends SimpleBakeTask
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
        return 'Model/app_form';
    }
}