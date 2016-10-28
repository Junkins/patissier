<%
/**
 * Controller bake template file
 *
 * Allows templating of Controllers generated from bake.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$defaultModel = $name;
%>
<?php
namespace <%= $namespace %>\Controller\Admin;

use <%= $namespace %>\Controller\Admin\AdminAppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;

/**
 * <%= $name %> Controller
 *
 * @property \<%= $namespace %>\Model\Table\<%= $defaultModel %>Table $<%= $defaultModel %>
<%
foreach ($components as $component):
    $classInfo = $this->Bake->classInfo($component, 'Controller/Component', 'Component');
%>
 * @property <%= $classInfo['fqn'] %> $<%= $classInfo['name'] %>
<% endforeach; %>
 */
class <%= $name %>Controller extends AdminAppController
{
<% echo $this->Bake->arrayProperty('helpers', $helpers, ['indent' => false]); %>
<% echo $this->Bake->arrayProperty('components', $components, ['indent' => false]); %>

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

<%
foreach($actions as $action) {
    echo $this->element('Patissier.Controller/' . $action);
}
%>
}
