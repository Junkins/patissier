<?php
namespace Patissier\Shell\Task\Core;

use Bake\Shell\Task\BakeTask;

class CoreTemplateTask extends BakeTask
{
    protected $template = '';

    public function getContent($action, $vars = null)
    {
        if (!$vars) {
            $vars = $this->_loadController();
        }

        if (empty($vars['primaryKey'])) {
            $this->error('Cannot generate views for models with no primary key');
            return false;
        }

        if ($action === "index" && !empty($this->params['index-columns'])) {
            $this->BakeTemplate->set('indexColumns', $this->params['index-columns']);
        }

        $this->BakeTemplate->set('action', $action);
        $this->BakeTemplate->set('plugin', $this->plugin);
        $this->BakeTemplate->set($vars);

        $template = 'Template/';
        $template .= (!empty($this->template))?$this->template:$action;
        return $this->BakeTemplate->generate($template);
    }
}