<?php
namespace <%= $namespace %>\Controller\Admin;

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