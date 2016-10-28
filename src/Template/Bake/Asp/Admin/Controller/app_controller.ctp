<?php
namespace <%= $namespace %>\Controller\Admin;

use App\Controller\AdminComponentRegistry;
use <%= $namespace %>\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Router;

abstract class AdminAppController extends AppController
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
        $this->loadComponent('AdminAuth');
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
            $this->_components = new AdminComponentRegistry($this);
        }

        if ($components !== null) {
            $components->setController($this);
            $this->_components = $components;
        }

        return $this->_components;
    }
}