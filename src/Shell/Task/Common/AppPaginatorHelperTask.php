<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class AppPaginatorHelperTask extends CoreBakeTask
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
        return 'Patissier.View/Helper/app_paginator_helper';
    }
}
