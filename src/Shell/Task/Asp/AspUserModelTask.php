<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreModelTask;

/**
 * AspuserModelTask
 */
class AspuserModelTask extends CoreModelTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Model/user/';
}
