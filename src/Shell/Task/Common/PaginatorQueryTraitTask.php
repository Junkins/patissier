<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class PaginatorQueryTraitTask extends CoreBakeTask
{
    public $pathFragment = 'ORM/Traits/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'paginator_query_trait';
        parent::main($name);
    }

    public function name()
    {
        return 'paginator_query_trait';
    }

    public function fileName($name)
    {
        return 'PaginatorQueryTrait.php';
    }

    public function template()
    {
        return '/ORM/paginator_query_trait';
    }
}