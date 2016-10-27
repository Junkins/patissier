<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreControllerTask;

/**
 * AspUserControllerTask
 */
class AspUserControllerTask extends CoreControllerTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Controller/User/';
}
