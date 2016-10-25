<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\Traits\ChangeBakeTemplateTrait;
use Bake\Shell\Task\ControllerTask;

/**
 * CoreControllerTask
 */
class CoreControllerTask extends ControllerTask
{
    use ChangeBakeTemplateTrait;
    public $tasks = [
        'Patissier.SampleBakeTemplate',
        'Patissier.CommonBakeTemplate',
    ];
}
