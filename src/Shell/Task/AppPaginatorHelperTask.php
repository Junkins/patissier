<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\SimpleBakeTask;

class AppPaginatorHelperTask extends SimpleBakeTask
{
    public $pathFragment = 'View/Helper/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_paginator_helper';
        parent::main($name);
    }

    public function name()
    {
        return 'app_paginator_helper';
    }

    public function fileName($name)
    {
        return 'AppPaginatorHelper.php';
    }

    public function template()
    {
        return 'View/Helper/app_paginator_helper';
    }
}
