<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspElementTableTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp';
    public $pathFragment = 'Template/Element/';

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