<%
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return !in_array($schema->columnType($field), ['binary', 'text']);
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
                        <?= $this->Form->input('dummy', ['class' => 'datepicker']) ?>
                        <div class="col-md-6">
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
                        <?= $this->element('table'); ?>
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