<?php
namespace App\Model\Entity\Traits;

use Cake\I18n\FrozenDate;

/**
 * HumanInfoEntityTrait
 * 人間に関する情報のトレイト
 * @author ito
 */
trait HumanInfoEntityTrait
{
    /**
     * isFullNameGetter
     * @author ito
     * @return boolean
     */
    private function isFullNameGetter($property)
    {
        // 「full_name」という文字列が含まれている場合
        return preg_match('/.*full_name$/', $property);
    }

    /**
     * isFullKanaGetter
     * @author ito
     * @return boolean
     */
    private function isFullKanaGetter($property)
    {
        // 「full_kana」という文字列が含まれている場合
        return preg_match('/.*full_kana$/', $property);
    }

    /**
     * fullNameGetter
     * @author ito
     * @return string
     */
    private function fullNameGetter($property)
    {
        return $this->fullname($property);
    }

    /**
     * fullKanaGetter
     * @author ito
     * @return string
     */
    private function fullKanaGetter($property)
    {
        return $this->fullname($property, 'name');
    }

    /**
     * fullname
     * @author ito
     * @return string
     */
    private function fullname($property, $suffix = '')
    {
        $familySuffix    = $this->getFamilySuffix($suffix);
        $givenSuffix     = $this->getGivenSuffix($suffix);

        $familyProperty  = $this->replaceFullProperty($property, $familySuffix);
        $givenProperty   = $this->replaceFullProperty($property, $givenSuffix);

        $familyValue     = (isset($this->_properties[$familyProperty])) ? $this->_properties[$familyProperty] : '';
        $givenValue      = (isset($this->_properties[$givenProperty]))  ? $this->_properties[$givenProperty]  : '';

        return $this->bindFullName($familyValue, $givenValue);
    }

    /**
     * getFamilySuffix
     * @author ito
     */
    private function getFamilySuffix($suffix)
    {
        return (empty($suffix)) ? 'family' : 'family_' . $suffix;
    }

    /**
     * getGivenSuffix
     * @author ito
     */
    private function getGivenSuffix($suffix)
    {
        return (empty($suffix)) ? 'given' : 'given_' . $suffix;
    }

    /**
     * bindFullName
     * @author ito
     * @return string
     */
    private function bindFullName($family, $given)
    {
        return $family . ' ' . $given;
    }

    /**
     * replaceFullProperty
     * @author ito
     * @return string
     */
    private function replaceFullProperty($property, $replacement)
    {
        return preg_replace('/full/', $replacement, $property);
    }

    /**
     * _getAge
     * 年齢の取得
     * @author ito
     */
    protected function _getAge()
    {
        // 生年月日データのキャスト
        $birthday = null;
        if (is_string($this->_properties['birthday'])) {
            $birthday = new FrozenDate($this->_properties['birthday']);
        } else {
            $birthday = $this->_properties['birthday'];
        }

        // 年齢の計算処理
        // @todo date('Ymd')をFrozenDateに調整
        $now = date('Ymd');
        $age = floor(($now - $birthday->format('Ymd')) / 10000);

        // 0歳以下の場合は0歳とする
        if ($age < 0) {
            $age = 0;
        }

        return $age;
    }

}