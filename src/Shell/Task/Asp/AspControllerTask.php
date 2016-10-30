<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreControllerTask;

/**
 * AspControllerTask
 */
class AspControllerTask extends CoreControllerTask
{
    public $bakeTemplateClass = 'asp';
    public $pathFragment = 'Controller/';
}
