<?php
namespace <%= $namespace %>\View\Helper\Admin;

use BootstrapUI\View\Helper\FormHelper;

class <%= $name %> extends FormHelper
{
    /**
     * create
     * @author ito
     */
    public function create($model = null, array $options = [])
    {
        // novalidate = true
        if (!array_key_exists('novalidate', $options)) {
            $options['novalidate'] = true;
        }

        return parent::create($model, $options);
    }

    /**
     * input
     * @author ito
     */
    public function input($fieldName, array $options = [])
    {
        // Label = OFF
        if (!array_key_exists('label', $options)) {
            $options['label'] = false;
        }

        // Legend = OFF
        if (!array_key_exists('legend', $options)) {
            $options['legend'] = false;
        }

        // wrapInput = OFF
        if (!array_key_exists('wrapInput', $options)) {
            $options['wrapInput'] = false;
        }

        // required = OFF
        if (!array_key_exists('required', $options)) {
            $options['required'] = false;
        }

        // Defalut Type is 'text'
        if (!array_key_exists('type', $options)) {
            $options['type'] = 'text';
        }

        // tab移動を制御したい場合
       if ((array_key_exists('tabindex', $options)) && ($options['tabindex'] === false)) {
            $options['tabindex'] = '-1';
        }

        return parent::input($fieldName, $options);
    }

    /**
     * errorGroup
     * @author ito
     */
    public function errorGroup($fieldset)
    {
        $error = [];

        foreach ($fieldset as $field) {
            if (empty($this->error($field))) {
                continue;
            }

            if (array_search($this->error($field), $error) !== false) {
                continue;
            }

            $error[] = $this->error($field);
        }

        if (empty($error)) {
            return '';
        }

        return implode('', $error);
    }



}