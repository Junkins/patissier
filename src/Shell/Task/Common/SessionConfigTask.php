<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class SessionConfigTask extends CoreBakeTask
{
    public $pathFragment = 'config/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'session_config';
        parent::main($name);
    }

    public function name()
    {
        return 'session_config';
    }

    public function fileName($name)
    {
        return 'session_config.php';
    }

    public function template()
    {
        return 'Patissier.config/session_config';
    }
}