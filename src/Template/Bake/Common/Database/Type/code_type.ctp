<?php
namespace <%= $namespace %>\Database;

use App\Database\AppType;
use Cake\Database\Driver;
use PDO;

abstract class <%= $name %> extends AppType
{
    protected $digit = null;

    /**
    * toPHP
    * @author ito
    */
    public function toPHP($value, Driver $driver)
    {
        if (
            (is_array($value)) ||
            ($value === null)  ||
            ($value === '')
        ) {
            return null;
        }

        // 2桁のコードとしてリターン
        return sprintf('%0' . $this->digit . 'd', $value);
    }

    /**
    * marshal
    * @author ito
    */
    public function marshal($value)
    {
        if (
            (is_array($value)) ||
            ($value === null)  ||
            ($value === '')
        ) {
            return $value;
        }

        return sprintf('%0' . $this->digit . 'd', $value);
    }

    /**
    * toDatabase
    * @author ito
    */
    public function toDatabase($value, Driver $driver)
    {
        if ($value === '') {
            return null;
        }

        // intにキャスト
        return (int) $value;
    }

    /**
    * toDatabase
    * @author ito
    */
    public function toStatement($value, Driver $driver)
    {
        if (
            (is_array($value)) ||
            ($value === null)  ||
            ($value === '')
        ) {
            return PDO::PARAM_NULL;
        }

        return PDO::PARAM_STR;
    }
}