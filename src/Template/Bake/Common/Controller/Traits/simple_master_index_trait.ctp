<?php
namespace App\Controller\Traits;

/**
 * SimpleMasterIndexTrait
 * マスタ共通Index処理
 * @author ito
 */
trait SimpleMasterIndexTrait
{
    /**
     * index method
     * @author ito
     */
    public function index()
    {
        $this->paginate['limit'] = 20;
        $query = $this->{$this->modelClass}->paginatorFind('all')
            ->order([$this->modelClass . '.id' => 'ASC']);
        $contents = $this->paginate($query);
        $this->set(compact('contents'));
        $this->set('_serialize', ['contents']);
    }
}