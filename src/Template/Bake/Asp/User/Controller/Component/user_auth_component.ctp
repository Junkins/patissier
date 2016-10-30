<?php
namespace App\Controller\Component\User;

use Cake\Controller\Component\AuthComponent;
use Cake\Event\Event;

/**
 * UserAuthComponent
 */
class UserAuthComponent extends AuthComponent
{
    /**
     * $_defaultConfig
     */
    protected $_defaultConfig = [
        'authenticate' => [
            'Form' => [
                'userModel' => 'Users',
                'fields' => [
                    'username' => 'loginid',
                    'password' => 'password'
                ],
            ]
        ],
        'loginAction' => [
            'controller' => 'admins',
            'action'     => 'login',
            'prefix'     => 'admin',
        ],
        'loginRedirect' => [
            'controller' => 'tops',
            'action'     => 'top',
            'prefix'     => 'admin',
        ],
        'storage' => [
            'className' => 'Session',
            'key' => 'Auth.User'
        ],
        'checkAuthIn' => 'Controller.startup'
    ];
}