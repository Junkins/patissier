<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminElementPaginateTask extends CoreBakeTask
{
    public $pathFragment = 'Template/Element/Admin/';
    public $bakeTemplateClass = 'asp_admin';

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
        return 'Layout/element_paginate';
    }
}