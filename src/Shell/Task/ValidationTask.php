<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\SimpleBakeTask;

class ValidationTask extends SimpleBakeTask
{
    public $pathFragment = 'Validation/';

    public function name()
    {
        return 'validation';
    }

    public function fileName($name)
    {
        return $name . 'Validation.php';
    }

    public function template()
    {
        return 'Validation/validation';
    }

}