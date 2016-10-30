<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class RoutesTask extends CoreBakeTask
{
    public $pathFragment = '../config/';
    public $bakeTemplateClass = 'asp';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'routes';
        parent::main($name);
    }

    public function name()
    {
        return 'routes';
    }

    public function fileName($name)
    {
        return 'routes.php';
    }

    public function template()
    {
        return '/config/routes';
    }
}