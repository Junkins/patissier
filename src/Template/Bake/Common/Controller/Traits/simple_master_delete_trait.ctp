<?php
namespace App\Controller\Traits;

use Cake\Validation\Validation;
use Cake\Network\Exception\NotFoundException;

/**
 * SimpleMasterDeleteTrait
 * マスタ共通Delete処理
 * @author ito
 */
trait SimpleMasterDeleteTrait
{
    /**
     * Delete method
     * 論理削除対応deletメソッド
     * @author ito
     */
    public function delete($id = null)
    {
        if (
            !Validation::naturalNumber($id) ||
            !$this->request->is('post')
        ) {
            throw new NotFoundException("ページが見つかりません");
        }

        $entity = $this->{$this->modelClass}->get($id);
        if ($this->{$this->modelClass}->delete($entity)) {
            $this->Flash->success('削除しました');
        } else {
            $this->Flash->error('削除に失敗しました');
        }

        return $this->redirect([
            'controller' => $this->name,
            'action' => 'index'
        ]);
    }
}