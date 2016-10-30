<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserAppPaginatorHelperTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'View/Helper/User/';

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
        return '/View/Helper/app_paginator_helper';
    }
}
