<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Query;

/**
 * FindIgnoreBehavior
 *
 * 非検索対象指定
 * @author tutida
 */
class FindIgnoreBehavior extends Behavior
{
    /**
     * findIgnore
     * 検索しないID
     *
     *
     * @author ito
     */
    public function findIgnore(Query $query, array $ignore)
    {
        if (empty($ignore)) {
            return $query;
        }

        return $query->where(function ($exp, $q) use ($ignore) {
            return $exp->notIn($this->_table->alias() . '.id', $ignore);
        });
    }
}