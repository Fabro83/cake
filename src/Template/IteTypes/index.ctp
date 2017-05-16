<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ite Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Classes'), ['controller' => 'IteClasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Class'), ['controller' => 'IteClasses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="iteTypes index large-9 medium-8 columns content">
    <h3><?= __('Ite Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_class_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($iteTypes as $iteType): ?>
            <tr>
                <td><?= $this->Number->format($iteType->id) ?></td>
                <td><?= $iteType->has('ite_class') ? $this->Html->link($iteType->ite_class->id, ['controller' => 'IteClasses', 'action' => 'view', $iteType->ite_class->id]) : '' ?></td>
                <td><?= h($iteType->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $iteType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $iteType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $iteType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iteType->id)]) ?>
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
