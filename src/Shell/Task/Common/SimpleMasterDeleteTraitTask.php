<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class SimpleMasterDeleteTraitTask extends CoreBakeTask
{
    public $pathFragment = 'Controller/Traits/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'simple_master_delete_trait';
        parent::main($name);
    }

    public function name()
    {
        return 'simple_master_delete_trait';
    }

    public function fileName($name)
    {
        return 'SimpleMasterDeleteTrait.php';
    }

    public function template()
    {
        return 'Patissier.Controller/Traits/simple_master_delete_trait';
    }
}