<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\Traits\ChangeBakeTemplateTrait;
use Bake\Shell\Task\ModelTask;

/**
 * CoreModelTask
 */
class CoreModelTask extends ModelTask
{
    use ChangeBakeTemplateTrait;
    public $tasks = [
        'Patissier.SampleBakeTemplate',
        'Patissier.CommonBakeTemplate',
    ];
}