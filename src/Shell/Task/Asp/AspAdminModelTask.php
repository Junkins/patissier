<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreModelTask;

/**
 * AspAdminModelTask
 */
class AspAdminModelTask extends CoreModelTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'Model/Admin/';
}
