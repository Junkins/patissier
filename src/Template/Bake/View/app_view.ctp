<?php
namespace <%= $namespace %>\View;

use Cake\View\View;

class <%= $name %> extends View
{
    public function initialize()
    {
        parent::initialize();

        // Load Helpers
        $this->loadHelper('Form', [
            'className' => 'AppForm',
        ]);

        $this->loadHelper('Html', [
            'className' => 'AppHtml',
        ]);

        $this->loadHelper('Url', [
            'className' => 'AppUrl',
        ]);

        $this->loadHelper('Paginator'], [
            'className' => 'AppPaginator',
        ]);
    }
}