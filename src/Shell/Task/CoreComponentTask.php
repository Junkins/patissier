<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\Traits\ChangeBakeTemplateTrait;
use Bake\Shell\Task\ComponentTask;

/**
 * CoreComponentTask
 */
class CoreComponentTask extends ComponentTask
{
    use ChangeBakeTemplateTrait;
    public $tasks = [
        'Patissier.SampleBakeTemplate',
        'Patissier.CommonBakeTemplate',
        'Patissier.AspBakeTemplate',
        'Patissier.AspAdminBakeTemplate',
        'Patissier.AspUserBakeTemplate',
    ];
}
