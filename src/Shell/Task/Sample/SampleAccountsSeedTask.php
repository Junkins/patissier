<?php
namespace Patissier\Shell\Task\Sample;

use Patissier\Shell\Task\CoreSeedTask;

/**
 * Task for the wrapper creation of Seed Files
 */
class SampleAccountsSeedTask extends CoreSeedTask
{
    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'accounts';
        parent::main($name);
    }

    /**
     * Get template data.
     *
     * @return array
     */
    public function templateData()
    {
        $this->table = 'accounts';
        // (注) 文字列として定義する
        $date = date('Y-m-d H:i:s');
        $this->records = "[
            [
                'name'            => 'AccountA',
                'description'     => '',
                'username'        => 'admin',
                'password'        => 'sample',
                'created'         => '$date',
                'modified'        => '$date',
            ]
        ]";
        return parent::templateData();
    }



}