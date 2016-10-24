<?php
namespace Patissier\Shell\Task\Sample;

use Patissier\Shell\Task\CoreSeedTask;

/**
 * Task for the wrapper creation of Seed Files
 */
class SampleProjectsSeedTask extends CoreSeedTask
{
    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'projects';
        parent::main($name);
    }

    /**
     * Get template data.
     *
     * @return array
     */
    public function templateData()
    {
        $this->table = 'projects';
        // (注) 文字列として定義する
        $date = date('Y-m-d H:i:s');
        $this->records = "[
          [
              'account_id'      => 1,
              'name'            => 'ProjectA',
              'description'     => 'ProjectA',
              'created'         => '$date',
              'modified'        => '$date',
          ],
          [
              'account_id'      => 1,
              'name'            => 'ProjectB',
              'description'     => 'ProjectB',
              'created'         => '$date',
              'modified'        => '$date',
          ],
          [
              'account_id'      => 1,
              'name'            => 'ProjectC',
              'description'     => 'ProjectC',
              'created'         => '$date',
              'modified'        => '$date',
          ]
        ]";
        return parent::templateData();
    }



}