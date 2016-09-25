<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppSeedTask;

/**
 * Task for the wrapper creation of Seed Files
 */
class SampleAccountsSeedTask extends AppSeedTask
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
        $this->records = "[
            [
                'name'            => 'AccountA',
                'description'     => '',
                'username'        => 'admin',
                'password'        => 'sample',
                'created'         => date('Y-m-d H:i:s'),
                'modified'        => date('Y-m-d H:i:s'),
            ]
        ]";
        return parent::templateData();
    }



}