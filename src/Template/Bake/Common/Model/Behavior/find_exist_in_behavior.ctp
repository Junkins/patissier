<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Query;

/**
 * FindExistInBehavior
 * INによる検索
 * @author ito
 */
class FindExistInBehavior extends Behavior
{
    /**
     * FindExistIn
     * Inによる検索 / optionのIDが空の場合はレコードがヒットしないようにする
     * @author ito
     */
    public function findExistIn(Query $query, array $options)
    {
        if (empty($options['ids'])) {
            return $query->where([$this->_table->alias() . '.id IN' => [0]]);
        }

        return $query->where([$this->_table->alias() . '.id IN' => $options['ids']]);
    }
}