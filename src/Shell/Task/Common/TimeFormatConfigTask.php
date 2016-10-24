<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class TimeFormatConfigTaskTask extends CoreBakeTask
{
    public $pathFragment = 'config/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'time_format_config';
        parent::main($name);
    }

    public function name()
    {
        return 'time_format_config';
    }

    public function fileName($name)
    {
        return 'time_format_config.php';
    }

    public function template()
    {
        return 'Patissier.config/time_format_config';
    }
}