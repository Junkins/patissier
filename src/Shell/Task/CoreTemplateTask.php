<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\TemplateTask;

class CoreTemplateTask extends TemplateTask
{
    public $tasks = [
        'Patissier.SampleBakeTemplate',
        'Patissier.CommonBakeTemplate',
        'Patissier.AspBakeTemplate',
        'Patissier.AspAdminBakeTemplate',
        'Patissier.AspUserBakeTemplate',
        'Patissier.AspCommonBakeTemplate',
    ];

    /**
     * main
     * BackTemplateClassの上書き
     * @author ito
     */
    public function main($name = null, $template = null, $action = null)
    {
        if ( !isset($this->bakeTemplateClass) ) {
            $this->BakeTemplate = $this->CommonBakeTemplate;
        } else {
            switch ($this->bakeTemplateClass) {
                case 'sample':
                    $this->BakeTemplate = $this->SampleBakeTemplate;
                    break;
                case 'asp':
                    $this->BakeTemplate = $this->AspBakeTemplate;
                    break;
                case 'asp_admin':
                    $this->BakeTemplate = $this->AspAdminBakeTemplate;
                    break;
                case 'asp_user':
                    $this->BakeTemplate = $this->AspUserBakeTemplate;
                    break;
                case 'asp_common':
                    $this->BakeTemplate = $this->AspCommonBakeTemplate;
                    break;
                default:
                    break;
            }
        }

        parent::main($name, $template, $action);
    }
}