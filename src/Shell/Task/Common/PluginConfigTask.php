<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class PluginConfigTask extends CoreBakeTask
{
    public $pathFragment = '../config/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'plugin_config';
        parent::main($name);
    }

    public function name()
    {
        return 'plugin_config';
    }

    public function fileName($name)
    {
        return 'plugin_config.php';
    }

    public function template()
    {
        return '/config/plugin_config';
    }
}