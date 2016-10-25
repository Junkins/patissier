<?php
namespace Patissier\Shell\Task;

use Patissier\View\CommonBakeView;
use Patissier\View\SampleBakeView;
use Bake\Shell\Task\BakeTemplateTask;
use Cake\Event\Event;
use Cake\Event\EventManager;
use Cake\Network\Request;
use Cake\Network\Response;

class PatissierBakeTemplateTask extends BakeTemplateTask
{
    protected $bakeViewClass = '';

    /**
     * Get view instance
     *
     * @return \Cake\View\View
     * @triggers Bake.initialize $view
     */
    public function getView()
    {
        if ($this->View) {
            return $this->View;
        }

        $theme = isset($this->params['theme']) ? $this->params['theme'] : '';

        $viewOptions = [
            'helpers' => [
                'Bake.Bake',
                'Bake.DocBlock'
            ],
            'theme' => $theme
        ];

        $bakeViewClass = 'Patissier\View\\' . $this->bakeViewClass;
        $view = new $bakeViewClass(new Request(), new Response(), null, $viewOptions);
        $event = new Event('Bake.initialize', $view);
        EventManager::instance()->dispatch($event);
        $this->View = $event->subject;

        return $this->View;
    }

    public function generate($template, $vars = null)
    {
        $template = 'Patissier.'. $template;
        return parent::generate($template, $vars);
    }

}
