<?php
namespace Patissier\View;

use Patissier\View\PatissierBakeView;

class AspCommonBakeView extends PatissierBakeView
{
    // ファイルパスが「//」にならないように工夫
    // View::_getViewFileName()
    // } elseif (!$plugin || $this->templatePath !== $this->name) {
    // 対策
    public $name = 'AspCommon';
    public $appDir = 'Asp/Common';
}