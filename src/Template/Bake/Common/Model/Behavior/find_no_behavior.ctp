<?php

namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Query;

/**
 * FindNoBehavior
 *
 *
 * @author ito
 */
class FindNoBehavior extends Behavior
{

    /**
     * findNo
     * 検索結果を0にするため
     * @author ito
     */
    public function findNo(Query $query, array $options)
    {
        return $query->where([$this->_table->alias() . '.id' => 0]);
    }
}