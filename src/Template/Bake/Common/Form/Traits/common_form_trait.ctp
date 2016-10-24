<?php
namespace App\Form\Traits;

use App\Validation\AppValidator;

/**
 *
 */
trait CommonFormTrait
{
    public function validator(Validator $validator = null)
    {
        if ($validator === null && empty($this->_validator)) {
            $validator = $this->_buildValidator(new AppValidator());
        }
        if ($validator) {
            $this->_validator = $validator;
        }

        return $this->_validator;
    }
}