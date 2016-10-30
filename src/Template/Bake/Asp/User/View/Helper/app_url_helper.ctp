<?php
namespace <%= $namespace %>\View\Helper\Admin;

use Cake\View\Helper\UrlHelper;

class <%= $name %> extends UrlHelper
{

    /**
     * build.
     *
     * @author ito
     */
    public function build($url = null, $full = false)
    {
        if (is_array($url) && !array_key_exists('prefix', $url)) {
            $url['prefix'] = 'admin';
        }
        return parent::build($url, $full);
    }
}