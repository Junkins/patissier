<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserViewTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'View/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'user_view';
        parent::main($name);
    }

    public function name()
    {
        return 'user_view';
    }

    public function fileName($name)
    {
        return 'UserView.php';
    }

    public function template()
    {
        return '/View/user_view';
    }
}