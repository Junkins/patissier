<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspElementPaginateTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp';
    public $pathFragment = 'Template/Element/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'element_paginate';
        parent::main($name);
    }

    public function name()
    {
        return 'element_paginate';
    }

    public function fileName($name)
    {
        return 'paginate.ctp';
    }

    public function template()
    {
        return '/Element/element_paginate';
    }
}