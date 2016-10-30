<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreModelTask;

/**
 * AspModelTask
 */
class AspModelTask extends CoreModelTask
{
    public $bakeTemplateClass = 'asp';
    public $pathFragment = 'Model/';
}
