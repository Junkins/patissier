<?php
namespace <%= $namespace %>\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Routing\Router;

abstract class <%= $name %> extends Controller
{
    public function initialize()
    {
        parent::initialize();

        // Load Components
        $this->loadComponent('Flash');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('PrgValidation');
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