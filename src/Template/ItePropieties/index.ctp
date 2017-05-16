<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ite Propiety'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Types'), ['controller' => 'IteTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Type'), ['controller' => 'IteTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Field Types'), ['controller' => 'IteFieldTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Field Type'), ['controller' => 'IteFieldTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itePropieties index large-9 medium-8 columns content">
    <h3><?= __('Ite Propieties') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_types_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('field_type_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itePropieties as $itePropiety): ?>
            <tr>
                <td><?= $this->Number->format($itePropiety->id) ?></td>
                <td><?= $itePropiety->has('ite_type') ? $this->Html->link($itePropiety->ite_type->id, ['controller' => 'IteTypes', 'action' => 'view', $itePropiety->ite_type->id]) : '' ?></td>
                <td><?= $itePropiety->has('ite_field_type') ? $this->Html->link($itePropiety->ite_field_type->id, ['controller' => 'IteFieldTypes', 'action' => 'view', $itePropiety->ite_field_type->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itePropiety->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itePropiety->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itePropiety->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itePropiety->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
