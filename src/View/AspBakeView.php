<?php
namespace Patissier\View;

use Patissier\View\PatissierBakeView;

class AspBakeView extends PatissierBakeView
{
    // ファイルパスが「//」にならないように工夫
    // View::_getViewFileName()
    // } elseif (!$plugin || $this->templatePath !== $this->name) {
    // 対策
    public $name = 'Asp';
    public $appDir = 'Asp';
}