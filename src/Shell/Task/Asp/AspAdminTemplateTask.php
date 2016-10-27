<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreTemplateTask;

class AspAdminTemplateTask extends CoreTemplateTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'Template/Admin/';
}