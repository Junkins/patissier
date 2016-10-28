<div class="dataTables_paginate paging_simple_numbers text-center">
    <ul class="pagination text-center">
        <?= $this->Paginator->first('<< '.__('first')) ?>
        <?= $this->Paginator->prev('< '.__('previous')) ?>
        <?= $this->Paginator->numbers(['before' => false, 'after' => false]) ?>
        <?= $this->Paginator->next(__('next').' >') ?>
        <?= $this->Paginator->last(__('last').' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} records out of {{count}} total, starting on record {{start}}, ending on {{end}}')]) ?></p>
</div>