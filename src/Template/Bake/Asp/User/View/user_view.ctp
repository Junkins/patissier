<?php
namespace <%= $namespace %>\View;

use App\View\UserHelperRegistry;
use Cake\View\View;
use Partial\View\PartialTrait;

class <%= $name %> extends View
{
    use PartialTrait;

    /**
     * $layoutPath
     */
    public $layoutPath = 'User';

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

        $this->loadHelper('Paginator', [
            'className' => 'AppPaginator',
        ]);
    }

    /**
     * element
     * @author ito
     */
    public function element($name, array $data = [], array $options = [])
    {
        return parent::element($name, $data, $options);
    }

    /**
     * helpers
     * @author ito
     */
    public function helpers()
    {
        if ($this->_helpers === null) {
            $this->_helpers = new UserHelperRegistry($this);
        }

        return $this->_helpers;
    }
}