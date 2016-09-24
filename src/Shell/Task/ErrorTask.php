<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\SimpleBakeTask;

class ErrorTask extends SimpleBakeTask
{
    public $pathFragment = 'Error/';

    public function name()
    {
        return 'error';
    }

    public function fileName($name)
    {
        return $name . 'Error.php';
    }

    public function template()
    {
        return 'Error/error';
    }
}