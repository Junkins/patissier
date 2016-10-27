<?php
namespace Patissier\Shell\Task\Traits;

trait ChangeBakeTemplateTrait
{
    /**
     * bake
     * BackTemplateClassの上書き
     * @author ito
     */
    public function bake($name)
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
                default:
                    break;
            }
        }

        parent::bake($name);
    }
}