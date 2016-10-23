<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\PatissierBakeTemplateTask;

class SampleBakeTemplateTask extends PatissierBakeTemplateTask
{
    protected $bakeViewClass = 'SampleBakeView';
}
