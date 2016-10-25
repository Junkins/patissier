<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class PaginatorQueryTask extends CoreBakeTask
{
    public $pathFragment = 'ORM/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'paginator_query';
        parent::main($name);
    }

    public function name()
    {
        return 'paginator_query';
    }

    public function fileName($name)
    {
        return 'PaginatorQuery.php';
    }

    public function template()
    {
        return 'ORM/paginator_query';
    }
}