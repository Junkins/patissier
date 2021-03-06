<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\Traits\ChangeBakeTemplateTrait;
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
    use ChangeBakeTemplateTrait;
    public $tasks = [
        'Patissier.SampleBakeTemplate',
        'Patissier.CommonBakeTemplate',
    ];

    /**
     * template
     * @author ito
     */
    public function template()
    {
        return 'Patissier.Seed/seed';
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