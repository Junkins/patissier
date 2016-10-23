<?php
namespace <%= $namespace %>\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Routing\Router;

class <%= $name %> extends Controller
{
    public function initialize()
    {
        parent::initialize();

        // Load Components
        $this->loadComponent('Flash');
        $this->loadComponent('RequestHandler');
    }
}