<?php
namespace Patissier\Shell\Task\Wrapper;

use Bake\Shell\Task\SimpleBakeTask;

class AppHtmlHelperTask extends SimpleBakeTask
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
        return 'View/Helper/app_html_helper';
    }
}
