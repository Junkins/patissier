<?php

namespace App\Model\Entity\Traits;

use Cake\Auth\DefaultPasswordHasher;

/**
 * AdminEntityTrait
 * @author ito
 */
trait AdminEntityTrait
{
    /**
     * パスワード保存時のハッシュ化
     *
     * @author ito
     */
    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}