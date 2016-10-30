<?php
namespace <%= $namespace %>\Controller;

use <%= $namespace %>\Controller\AppController;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Routing\Router;

abstract class AppController extends Controller
{
    /**
     * initialize
     * @author ito
     */
    public function initialize()
    {
        parent::initialize();
        // 認証用のコンポーネントの読み込み
    }

    /**
     * beforeFilter
     * @author ito
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    /**
     * beforeRender
     * @author ito
     */
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $modelClassName = $this->name;
        $this->set(compact('modelClassName'));
    }
}