<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class SimpleMasterIndexTraitTask extends CoreBakeTask
{
    public $pathFragment = 'Controller/Traits/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'simple_master_index_trait';
        parent::main($name);
    }

    public function name()
    {
        return 'simple_master_index_trait';
    }

    public function fileName($name)
    {
        return 'SimpleMasterIndexTrait.php';
    }

    public function template()
    {
        return 'Controller/Traits/simple_master_index_trait';
    }
}