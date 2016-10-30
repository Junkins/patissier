<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserCssCommonTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = '../webroot/css/user/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'common';
        parent::main($name);
    }

    public function name()
    {
        return 'common';
    }

    public function fileName($name)
    {
        return 'common.css';
    }

    public function template()
    {
        return '/webroot/css/common';
    }
}