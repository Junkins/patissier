<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminElementSidebarTask extends CoreBakeTask
{
    public $pathFragment = 'Template/Admin/Element/';
    public $bakeTemplateClass = 'asp_admin';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'element_sidebar';
        parent::main($name);
    }

    public function name()
    {
        return 'element_sidebar';
    }

    public function fileName($name)
    {
        return 'sidebar.ctp';
    }

    public function template()
    {
        return '/Element/element_sidebar';
    }
}