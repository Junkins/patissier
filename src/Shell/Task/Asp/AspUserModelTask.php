<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreModelTask;

/**
 * AspUserModelTask
 */
class AspUserModelTask extends CoreModelTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Model/User/';
}
