<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserElementTableTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Template/Element/User/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'element_table';
        parent::main($name);
    }

    public function name()
    {
        return 'element_table';
    }

    public function fileName($name)
    {
        return 'table.ctp';
    }

    public function template()
    {
        return '/Element/element_table';
    }
}