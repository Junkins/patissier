<?php
namespace Patissier\Shell\Task;

use Cake\Console\ConsoleOptionParser;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Utility\Inflector;
use Migrations\Shell\Task\SeedTask;

/**
 * Task for the wrapper creation of Seed Files
 */
class CoreSeedTask extends SeedTask
{
 /**
     * Tasks to be loaded by this Task
     *
     * @var array
     */
    public $tasks = [
        'Patissier.SmapleBakeTemplate',
        'Patissier.CommonBakeTemplate',
        'Bake.Test'
    ];

    public function template()
    {
        return 'Patissier.Seed/seed';
    }

    // BackTemplateClassの上書き
    public function bake($name)
    {
        $this->BakeTemplate = $this->CommonBakeTemplate;
        parent::bake($name);
    }

    /**
     * Get template data.
     *
     * @return array
     */
    public function templateData()
    {
        $namespace = Configure::read('App.namespace');
        if ($this->plugin) {
            $namespace = $this->_pluginNamespace($this->plugin);
        }

        return [
            'className' => $this->BakeTemplate->viewVars['name'],
            'namespace' => $namespace,
            'records'   => (!empty($this->records))? $this->records : false,
            'table'     => Inflector::tableize($this->table),
        ];
    }


}