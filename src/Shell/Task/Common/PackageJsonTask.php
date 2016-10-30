<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class PackageJsonTask extends CoreBakeTask
{
    public $pathFragment = '../';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'package_json';
        parent::main($name);
    }

    public function name()
    {
        return 'package_json';
    }

    public function fileName($name)
    {
        return 'package.json';
    }

    public function template()
    {
        return '/package_json';
    }
}