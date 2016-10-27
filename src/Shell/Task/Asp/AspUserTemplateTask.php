<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreTemplateTask;

class AspUserTemplateTask extends CoreTemplateTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Template/User/';
}