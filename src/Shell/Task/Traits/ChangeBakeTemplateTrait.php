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
                default:
                    break;
            }
        }

        parent::bake($name);
    }
}