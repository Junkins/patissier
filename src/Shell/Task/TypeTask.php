<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\SimpleBakeTask;

class TypeTask extends SimpleBakeTask
{
    public $pathFragment = 'Type/';

    public function name()
    {
        return 'type';
    }

    public function fileName($name)
    {
        return $name . 'Type.php';
    }

    public function template()
    {
        return 'Database/Type/type';
    }
}