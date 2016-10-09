<?php
namespace Patissier\Shell\Task\Sample;

use Patissier\Shell\Task\Core\CoreMigrationTask;

/**
 * Task for the wrapper creation of Migration Files
 */
class SampleMigrationTask extends CoreMigrationTask
{
    protected $blueprint = [
            'accounts' => [
                'fields' => [
                    'name:text',
                    'description:text',
                    'username:text',
                    'password:text',
                    'created',
                    'modified'
                ]
            ],
            'projects' => [
                'fields' => [
                    'account_id:integer',
                    'name:text',
                    'description:text',
                    'created',
                    'modified',
                ]
            ],
            'tasks' => [
                'fields' => [
                    'project_id:integer',
                    'name:text',
                    'description:text',
                    'created',
                    'modified',
                ]
            ]
        ];
}