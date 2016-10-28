<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminExceptionRendererTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'Error/Admin/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'exception_renderer';
        parent::main($name);
    }

    public function name()
    {
        return 'exception_renderer';
    }

    public function fileName($name)
    {
        return 'ExceptionRenderer.php';
    }

    public function template()
    {
        return 'Error/exception_renderer';
    }
}