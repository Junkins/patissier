<?php
namespace App\Controller\Component\Admin;

use Cake\Controller\Component\AuthComponent;
use Cake\Event\Event;

/**
 * AdminAuthComponent
 */
class AdminAuthComponent extends AuthComponent
{
    /**
     * $_defaultConfig
     */
    protected $_defaultConfig = [
        'authenticate' => [
            'Form' => [
                'userModel' => 'Admins',
                'fields' => [
                    'username' => 'loginid',
                    'password' => 'password'
                ],
            ]
        ],
        'loginAction' => [
            'controller' => 'admins',
            'action'     => 'login',
            'prefix'     => 'admins',
        ],
        'loginRedirect' => [
            'controller' => 'tops',
            'action'     => 'top',
            'prefix'     => 'admins',
        ],
        'storage' => [
            'className' => 'Session',
            'key' => 'Auth.Admin'
        ],
    ];
}