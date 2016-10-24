<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\Traits\ChangeBakeTemplateTrait;
use Bake\Shell\Task\SimpleBakeTask;

/**
 * Task for the wrapper creation of AppClass
 */
class CoreBakeTask extends SimpleBakeTask
{
    use ChangeBakeTemplateTrait;
    public $tasks = [
        'Patissier.SmapleBakeTemplate',
        'Patissier.CommonBakeTemplate',
    ];

    public function name(){}

    public function fileName($name){}

    public function template(){}
}