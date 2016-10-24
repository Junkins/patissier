<?php
namespace App\ORM;

use Cake\ORM\Query;

class PaginatorQuery extends Query
{
    /**
     * all
     * @author ito
     */
    public function all()
    {
        // Paginator時の並び順を保証するため
        $this->order([
            $this->repository()->alias() . '.id' => 'ASC'
        ]);
        return parent::all();
    }
}