<%
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return $schema->columnType($field) !== 'binary';
    });

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
    $fields = $fields->reject(function ($field) {
        return $field === 'lft' || $field === 'rght';
    });
}
$fields = $fields->reject(function ($field) {
    return in_array($field, ['created', 'modified', 'deleted']); // 表示の必要なし
});
%>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title"><?= __('<%= $singularHumanName %>') ?>&nbsp;<small><?= __($this->template) ?></small></h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="row">
                    <?= $this->Form->create($<%= $singularVar %>) ?>
                    <div class="col-md-12">
<%
        foreach ($fields as $field) {
            if (in_array($field, $primaryKey)) {
                continue;
            }
            if (isset($keyFields[$field])) {
                $fieldData = $schema->column($field);
                if (!empty($fieldData['null'])) {
%>
            <?= $this->Form->input('<%= $field %>', ['options' => $<%= $keyFields[$field] %>, 'empty' => true]); ?>
<%
                } else {
%>
            <?= $this->Form->input('<%= $field %>', ['options' => $<%= $keyFields[$field] %>]); ?>
<%
                }
                continue;
            }
            if (!in_array($field, ['created', 'modified', 'updated'])) {
                $fieldData = $schema->column($field);
                if (in_array($fieldData['type'], ['datetime', 'time']) && (!empty($fieldData['null']))) {
%>
                      <?= $this->Form->input('<%= $field %>', ['empty' => true]); ?>
<%
                } elseif (in_array($fieldData['type'], ['date'])) {
%>
                      <?= $this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datepicker']); ?>
<%
                } elseif ($field === 'password') {
%>
                      <?= $this->Form->input('<%= $field %>', ['type' => 'password']); ?>
<%
                } elseif (in_array($fieldData['type'], ['text'])) {
%>
                      <% if ($field === 'name') { %>
                      <?= $this->Form->input('<%= $field %>', ['type' => 'text', 'label' => __('<%= $singularHumanName %> Name')]); ?>
                      <% } else { %>
                      <?= $this->Form->input('<%= $field %>', ['type' => 'text']); ?>
                      <% } %>

<%
                } else {
%>
            <?= $this->Form->input('<%= $field %>'); ?>
<%
                }
            }
        }
        if (!empty($associations['BelongsToMany'])) {
            foreach ($associations['BelongsToMany'] as $assocName => $assocData) {
%>
            <?= $this->Form->input('<%= $assocData['property'] %>._ids', ['options' => $<%= $assocData['variable'] %>]); ?>
<%
            }
        }
%>
                    </div>
                    <div class="col-md-4">
                      <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-block btn-primary']) ?>
                    </div>
                    <?= $this->Form->end() ?>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>