<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class GitPreCommitTask extends CoreBakeTask
{
    public $pathFragment = '';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'git_pre_commit';
        parent::main($name);
    }

    public function name()
    {
        return 'git_pre_commit';
    }

    public function fileName($name)
    {
        return 'git-pre-commit';
    }

    public function template()
    {
        return 'Patissier.git_pre_commit';
    }
}