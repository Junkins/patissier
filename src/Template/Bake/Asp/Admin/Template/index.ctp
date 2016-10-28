<%
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return true;
    });

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
    $fields = $fields->reject(function ($field) {
        return $field === 'lft' || $field === 'rght';
    });
}

if (!empty($indexColumns)) {
    $fields = $fields->take($indexColumns);
}
%>
<section class="content-header">
    <h1></h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                    <div class="box-tools pull-right">
                        <?= $this->Html->link(__('Add'), ['action' => 'add'], ['class' => 'btn btn-sm btn-add btn-primary']) ?>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <?= $this->Form->create($modelClassName, ['type' => 'post', 'url' => ['action' => 'index']]) ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $this->Form->input('dummy', ['class' => 'datepicker']) ?>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                  <?= $this->Form->button(__('Search'), ['type' => 'submit', 'class' => 'btn btn-block btn-primary']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="scroll">
                            <table class="table table-bordered table-hover dataTable default-table" role="grid">
                                <thead>
                                    <tr>
                                        <% foreach ($fields as $field): %>
                                            <th><?= $this->Paginator->sort('<%= $field %>') ?></th>
                                        <% endforeach; %>
                                            <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($<%= $pluralVar %> as $<%= $singularVar %>): ?>
                                    <tr>
                        <%        foreach ($fields as $field) {
                                    $isKey = false;
                                    if (!empty($associations['BelongsTo'])) {
                                        foreach ($associations['BelongsTo'] as $alias => $details) {
                                            if ($field === $details['foreignKey']) {
                                                $isKey = true;
                        %>
                                        <td><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></td>
                        <%
                                                break;
                                            }
                                        }
                                    }
                                    if ($isKey !== true) {
                                        if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
                        %>
                                        <td><?= h($<%= $singularVar %>-><%= $field %>) ?></td>
                        <%
                                        } else {
                        %>
                                        <td><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></td>
                        <%
                                        }
                                    }
                                }

                                $pk = '$' . $singularVar . '->' . $primaryKey[0];
                        %>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['action' => 'view', <%= $pk %>]) ?>
                                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', <%= $pk %>]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', <%= $pk %>], ['confirm' => __('Are you sure you want to delete # {0}?', <%= $pk %>)]) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->element('paginate'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>