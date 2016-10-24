<?php
namespace App\ORM\Traits;

use App\ORM\PaginatorQuery;

trait PaginatorQueryTrait
{
    /**
     * paginatorFind
     */
    public function paginatorFind($type = 'all', $options = [])
    {
        $query = $this->paginatorQuery();
        $query->select();

        return $this->callFinder($type, $query, $options);
    }

    /**
     * paginatorQuery
     */
    private function paginatorQuery()
    {
        return new PaginatorQuery($this->connection(), $this);
    }
}