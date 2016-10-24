<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class AppHtmlHelperTask extends CoreBakeTask
{
    public $pathFragment = 'View/Helper/';

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
        return 'Patissier.View/Helper/app_html_helper';
    }
}
