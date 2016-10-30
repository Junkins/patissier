<?php
namespace <%= $namespace %>\Controller\User;

use App\Controller\Admin\AdminComponentRegistry;
use <%= $namespace %>\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Router;

abstract class UserAppController extends AppController
{
    /**
     * initialize
     * @author ito
     */
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->className('App\View\UserView');
        // 認証用のコンポーネントの読み込み
        // $this->loadComponent('UserAuth');
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

    /**
     * components
     * @author ito
     */
    public function components($components = null)
    {
        if ($components === null && $this->_components === null) {
            $this->_components = new UserComponentRegistry($this);
        }

        if ($components !== null) {
            $components->setController($this);
            $this->_components = $components;
        }

        return $this->_components;
    }
}