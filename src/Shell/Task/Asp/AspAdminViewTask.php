<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminViewTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'View/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'admin_view';
        parent::main($name);
    }

    public function name()
    {
        return 'admin_view';
    }

    public function fileName($name)
    {
        return 'Admin.php';
    }

    public function template()
    {
        return 'View/admin_view';
    }
}