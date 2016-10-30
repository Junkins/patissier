<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspElementSidebarLinkTask extends CoreBakeTask
{
    public $pathFragment = 'Template/Element/';
    public $bakeTemplateClass = 'asp';

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