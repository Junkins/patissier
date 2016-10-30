<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspElementFooterTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp';
    public $pathFragment = 'Template/Element/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'element_footer';
        parent::main($name);
    }

    public function name()
    {
        return 'element_footer';
    }

    public function fileName($name)
    {
        return 'footer.ctp';
    }

    public function template()
    {
        return '/Element/element_footer';
    }
}