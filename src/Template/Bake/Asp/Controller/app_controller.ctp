<?php
namespace <%= $namespace %>\Controller;

use App\Controller\ComponentRegistry;
use <%= $namespace %>\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Router;

abstract class AppController extends AppController
{
    /**
     * initialize
     * @author ito
     */
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->className('App\View\AdminView');
        // 認証用のコンポーネントの読み込み
        // $this->loadComponent('AdminAuth');
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
    }
}