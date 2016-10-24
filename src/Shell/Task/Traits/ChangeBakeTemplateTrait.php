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
        $this->BakeTemplate = $this->CommonBakeTemplate;
        parent::bake($name);
    }
}