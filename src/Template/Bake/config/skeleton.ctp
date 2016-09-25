<%
$wantedOptions = array_flip(['length', 'limit', 'default', 'unsigned', 'null', 'comment', 'autoIncrement']);
$columnMethod  = 'addColumn';
$indexMethod   = 'addIndex';
%>
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

        $<%= $table%>Table = $this->table('<%= $table%>');
<% foreach ($columns[$table]['fields'] as $column => $config): %>
        $<%= $table%>Table-><%= $columnMethod %>('<%= $column %>', '<%= $config['columnType'] %>', [<%
                $columnOptions = $config['options'];
                $columnOptions = array_intersect_key($columnOptions, $wantedOptions);
                if (empty($columnOptions['comment'])) {
                    unset($columnOptions['comment']);
                }
                echo $this->Migration->stringifyList($columnOptions, ['indent' => 3]);
            %>]);
<% endforeach; %>
<% foreach ($columns[$table]['indexes'] as $column => $config): %>
        $<%= $table%>Table-><%= $indexMethod %>([<%=
                $this->Migration->stringifyList($config['columns'], ['indent' => 3])
                %>], [<%
                $options = [];
                echo $this->Migration->stringifyList($config['options'], ['indent' => 3]);
            %>]);
<% endforeach; %>
        $<%= $table%>Table->create();
<% endforeach; %>
    }
}
