<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\Traits\ChangeBakeTemplateTrait;
use Bake\Shell\Task\ModelTask;

/**
 * Task for the wrapper creation of AppClass
 */
class CoreModelTask extends ModelTask
{
    use ChangeBakeTemplateTrait;
    public $tasks = [
        'Patissier.SampleBakeTemplate',
        'Patissier.CommonBakeTemplate',
    ];
}