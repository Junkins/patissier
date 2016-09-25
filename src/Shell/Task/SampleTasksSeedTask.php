<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppSeedTask;

/**
 * Task for the wrapper creation of Seed Files
 */
class SampleTasksSeedTask extends AppSeedTask
{
    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'tasks';
        parent::main($name);
    }

    /**
     * Get template data.
     *
     * @return array
     */
    public function templateData()
    {
        $this->table = 'tasks';
        // (注) 文字列として定義する
        $date = date('Y-m-d H:i:s');
        $this->records = "[
          [
              'project_id'      => 1,
              'name'            => 'TaskA',
              'description'     => '',
              'created'         => '$date',
              'modified'        => '$date',
          ],
          [
              'project_id'      => 2,
              'name'            => 'TaskB',
              'description'     => '',
              'created'         => '$date',
              'modified'        => '$date',
          ],
          [
              'project_id'      => 3,
              'name'            => 'TaskC',
              'description'     => '',
              'created'         => '$date',
              'modified'        => '$date',
          ],
          [
              'project_id'      => 4,
              'name'            => 'TaskD',
              'description'     => '',
              'created'         => '$date',
              'modified'        => '$date',
          ],
          [
              'project_id'      => 5,
              'name'            => 'TaskE',
              'description'     => '',
              'created'         => '$date',
              'modified'        => '$date',
          ],
          [
              'project_id'      => 6,
              'name'            => 'TaskF',
              'description'     => '',
              'created'         => '$date',
              'modified'        => '$date',
          ],
        ]";
        return parent::templateData();
    }



}