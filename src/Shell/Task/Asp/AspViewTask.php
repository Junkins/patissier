<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspViewTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp';
    public $pathFragment = 'View/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'view';
        parent::main($name);
    }

    public function name()
    {
        return 'view';
    }

    public function fileName($name)
    {
        return 'View.php';
    }

    public function template()
    {
        return '/View/view';
    }
}