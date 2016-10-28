<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminAppHtmlHelperTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'View/Helper/Admin/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_html_helper';
        parent::main($name);
    }

    public function name()
    {
        return 'app_html_helper';
    }

    public function fileName($name)
    {
        return 'AppHtmlHelper.php';
    }

    public function template()
    {
        return 'View/Helper/app_html_helper';
    }
}
