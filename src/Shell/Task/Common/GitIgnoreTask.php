<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class GitIgnoreTask extends CoreBakeTask
{
    public $pathFragment = '';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'git_ignore';
        parent::main($name);
    }

    public function name()
    {
        return 'git_ignore';
    }

    public function fileName($name)
    {
        return '.gitignore';
    }

    public function template()
    {
        return 'Patissier.git_ignore';
    }
}