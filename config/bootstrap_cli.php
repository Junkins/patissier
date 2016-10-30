<?php
// config/bootstrap_cli.php
use Cake\Event\Event;
use Cake\Event\EventManager;
use Cake\Utility\Hash;

// ASP関係
EventManager::instance()->on(
    'Bake.beforeRender.Asp.Admin.Controller.controller',
    function (Event $event) {
        $view = $event->subject();
        if ($view->viewVars['name'] == 'Admins') {
            // Users コントローラに login と logout を追加
            $view->viewVars['actions'] = [
                'login',
                'logout',
                'index',
                'view',
                'add',
                'edit',
                'delete'
            ];
        }
    }
);

EventManager::instance()->on(
    'Bake.beforeRender.Asp.User.Controller.controller',
    function (Event $event) {
        $view = $event->subject();
        if ($view->viewVars['name'] == 'Users') {
            // Users コントローラに login と logout を追加
            $view->viewVars['actions'] = [
                'login',
                'logout',
                'index',
                'view',
                'add',
                'edit',
                'delete'
            ];
        }
    }
);
