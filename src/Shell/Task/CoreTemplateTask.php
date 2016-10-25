<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\TemplateTask;

class CoreTemplateTask extends TemplateTask
{
    public $tasks = [
        'Patissier.SampleBakeTemplate',
        'Patissier.CommonBakeTemplate',
    ];

    /**
     * bake
     * BackTemplateClassの上書き
     * @author ito
     */
    public function bake($action, $content = '')
    {
        if ( !isset($this->bakeTemplateClass) ) {
            $this->BakeTemplate = $this->CommonBakeTemplate;
        } else {
            switch ($this->bakeTemplateClass) {
                case 'sample':
                    $this->BakeTemplate = $this->SampleBakeTemplate;
                    break;
                default:
                    break;
            }
        }

        parent::bake($action, $content);
    }
}