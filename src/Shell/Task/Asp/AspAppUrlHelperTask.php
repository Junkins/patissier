<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAppUrlHelperTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp';
    public $pathFragment = 'View/Helper/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_url_helper';
        parent::main($name);
    }

    public function name()
    {
        return 'app_url_helper';
    }

    public function fileName($name)
    {
        return 'AppUrlHelper.php';
    }

    public function template()
    {
        return '/View/Helper/app_url_helper';
    }
}
