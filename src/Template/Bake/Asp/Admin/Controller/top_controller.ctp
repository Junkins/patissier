<?php
namespace <%= $namespace %>\Controller\Admin;

use <%= $namespace %>\Controller\Admin\AdminAppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;

class TopsController extends AdminAppController
{
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
     * top
     * @author ito
     */
    public function top()
    {

    }
}