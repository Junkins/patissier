<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreControllerTask;

/**
 * AspAdminControllerTask
 */
class AspAdminControllerTask extends CoreControllerTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'Controller/Admin/';
}
