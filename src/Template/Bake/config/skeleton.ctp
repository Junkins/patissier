<?php
use Migrations\AbstractMigration;

class <%= $name %> extends AbstractMigration
{
    /**
     * Change Method.
     */
    public function change()
    {
<% foreach ($tables as $table): %>
        $table = $this->table('<%= $table%>');
<% foreach ($columns[$table]['fields'] as $column => $config): %>
        $table-><%= $columnMethod %>('<%= $column %>', '<%= $config['columnType'] %>', [<%
                $columnOptions = $config['options'];
                $columnOptions = array_intersect_key($columnOptions, $wantedOptions);
                if (empty($columnOptions['comment'])) {
                    unset($columnOptions['comment']);
                }
                echo $this->Migration->stringifyList($columnOptions, ['indent' => 3]);
            %>]);
<% endforeach; %>
<% foreach ($columns[$table]['indexes'] as $column => $config): %>
        $table-><%= $indexMethod %>([<%=
                $this->Migration->stringifyList($config['columns'], ['indent' => 3])
                %>], [<%
                $options = [];
                echo $this->Migration->stringifyList($config['options'], ['indent' => 3]);
            %>]);
<% endforeach; %>
        $table->addPrimaryKey([<%=
                $this->Migration->stringifyList($columns['primaryKey'], ['indent' => 3])
                %>]);
        $table->create();
<% endforeach; %>
    }
}
