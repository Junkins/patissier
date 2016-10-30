<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserExceptionRendererTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Error/User/';

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
        return '/Error/exception_renderer';
    }
}