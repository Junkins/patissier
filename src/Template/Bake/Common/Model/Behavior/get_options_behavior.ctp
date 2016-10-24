<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;

/**
 * GetOptionsBehavior
 * オプションのラベル取得オプション
 * @author ito
 */
class GetOptionsBehavior extends Behavior
{
    /**
     * getOptions
     * セレクトボックス用のオプションの取得
     * @author ito
     */
    public function getOptions($order = [])
    {
        $query = $this->_table->find('list', [
            'keyField'   => 'id',
            'valueField' => 'label'
        ]);

        // オプションの配列の初期設定
        if (
            empty($order) &&
            !empty($this->_table->defaultOptionsOrder)
        ) {
            $order = $this->_table->defaultOptionsOrder;
        }

        if (!empty($order)) {
            $query->order($order);
        }

        return $query;
    }
}