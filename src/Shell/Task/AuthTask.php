<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\SimpleBakeTask;

class AuthTask extends SimpleBakeTask
{
    public $pathFragment = 'Auth/';

    public function name()
    {
        return 'auth';
    }

    public function fileName($name)
    {
        return $name . 'Auth.php';
    }

    public function template()
    {
        return 'Auth/auth';
    }
}