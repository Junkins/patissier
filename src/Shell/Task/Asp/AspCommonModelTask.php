<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreModelTask;

/**
 * AspCommonModelTask
 */
class AspCommonModelTask extends CoreModelTask
{
    public $bakeTemplateClass = 'asp_common';
    public $pathFragment = 'Model/Common/';
}
