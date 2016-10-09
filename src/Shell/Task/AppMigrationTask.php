<?php
namespace Patissier\Shell\Task;

use Cake\Core\Configure;
use Migrations\Shell\Task\MigrationTask;
use Migrations\Util\ColumnParser;

/**
 * Task for the wrapper creation of Migration Files
 */
class AppMigrationTask extends MigrationTask
{
    /**
     * Execute method
     */
    public function main($name = null)
    {
        // 基盤になるMigrationファイルの名前を固定
        //「初期構築」の意
        $name = 'initial_construction';
        parent::main($name);
    }

    public function template()
    {
        return 'Patissier.config/skeleton';
    }

    public function templateData()
    {
        $tables  = [];
        $columns = [];

        $blueprint = [];
        $blueprint = [
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

        $columnParser = new ColumnParser;
        foreach ($blueprint as $table => $construction) {
            $tables[] = $table;

            $columns[$table] = [];
            $columns[$table] = [
                'fields'     => $columnParser->parseFields($construction['fields']),
                'indexes'    => $columnParser->parseIndexes($construction['fields']),
                'primaryKey' => $columnParser->parsePrimaryKey($construction['fields'])
            ];
        }

        // マイグレーションファイルの作成に必要なパラメータの取得
        $className  = $this->BakeTemplate->viewVars['name'];
        $namespace  = Configure::read('App.namespace');
        return [
            'namespace' => $namespace,
            'tables'    => $tables,
            'columns'   => $columns,
            'name'      => $className
        ];
    }
}