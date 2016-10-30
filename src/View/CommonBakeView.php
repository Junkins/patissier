<?php
namespace Patissier\View;

use Patissier\View\PatissierBakeView;

class CommonBakeView extends PatissierBakeView
{
    // ファイルパスが「//」にならないように工夫
    // View::_getViewFileName()
    // } elseif (!$plugin || $this->templatePath !== $this->name) {
    // 対策
    public $name = 'Common';
    public $appDir = 'Common';
}