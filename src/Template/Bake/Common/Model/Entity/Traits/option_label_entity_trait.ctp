<?php

namespace App\Model\Entity\Traits;

/**
 * OptionLabelEntityTrait
 * セクレトボックスのオプション用のラベル用のEntity共有処理
 * @author ito
 */
trait OptionLabelEntityTrait
{
    /**
     * _getLabel
     * セレクトボックスのオプションの設定
     * @author ito
     */
    protected function _getLabel()
    {
        return $this->_properties['name'];
    }
}