<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminElementHeaderTask extends CoreBakeTask
{
    public $pathFragment = 'Template/Admin/Element/';
    public $bakeTemplateClass = 'asp_admin';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'element_header';
        parent::main($name);
    }

    public function name()
    {
        return 'element_header';
    }

    public function fileName($name)
    {
        return 'header.ctp';
    }

    public function template()
    {
        return '/Element/element_header';
    }
}