<?php
namespace Patissier\View;

use Bake\View\BakeView;

class PatissierBakeView extends BakeView
{
    public $layout = 'Patissier.default';
    public $appDir = '';

    protected function _paths($plugin = null, $cached = true)
    {
        $paths = parent::_paths($plugin, false);
        foreach ($paths as &$path) {
            $path .= $this->appDir . DS;
        }

        return $paths;
    }
}