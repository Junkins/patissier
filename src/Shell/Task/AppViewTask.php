<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppBakeTask;

class AppViewTask extends AppBakeTask
{
    public $pathFragment = 'View/';

    public function name()
    {
        return 'app_view';
    }

    public function fileName($name)
    {
        // AppView.php
        $name = 'View';
        return parent::fileName($name);
    }

    public function template()
    {
        return 'app_view';
    }
}