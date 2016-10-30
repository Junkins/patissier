<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserElementSidebarLinkTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Template/User/Element/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'element_sidebar_link';
        parent::main($name);
    }

    public function name()
    {
        return 'element_sidebar_link';
    }

    public function fileName($name)
    {
        return 'sidebar_link.ctp';
    }

    public function template()
    {
        return '/Element/element_sidebar_link';
    }
}