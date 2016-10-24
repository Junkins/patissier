<?php
namespace App\Model\Entity\Traits;

use JpChronos\JpChronos;

trait JpDateInfoEntityTrait
{
    /**
     * isJpFormat
     * @author ito
     */
    private function isJpFormat($property)
    {
        if (
            preg_match('/jp_.*_date/', $property) ||
            preg_match('/jp_.*_created/', $property)
        ) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * jpFormat
     * @author ito
     */
    private function jpFormat($property)
    {
        $property = str_replace('jp_', '', $property);

        if (empty($this->_properties[$property])) {
            return '';
        }

        $value = $this->_properties[$property];
        return new JpChronos($value);
    }
}