<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserElementHeaderTask extends CoreBakeTask
{
    public $pathFragment = 'Template/User/Element/';
    public $bakeTemplateClass = 'asp_user';

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