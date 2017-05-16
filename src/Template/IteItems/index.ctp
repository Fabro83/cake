<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ite Item'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Budgets'), ['controller' => 'IteBudgets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Budget'), ['controller' => 'IteBudgets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Acquisition Types'), ['controller' => 'IteAcquisitionTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Acquisition Type'), ['controller' => 'IteAcquisitionTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Statuses'), ['controller' => 'IteStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Status'), ['controller' => 'IteStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Classes'), ['controller' => 'IteClasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Class'), ['controller' => 'IteClasses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Types'), ['controller' => 'IteTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Type'), ['controller' => 'IteTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="iteItems index large-9 medium-8 columns content">
    <h3><?= __('Ite Items') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('decree') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sector_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('budget_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acquisition_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_class_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_type_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($iteItems as $iteItem): ?>
            <tr>
                <td><?= $this->Number->format($iteItem->id) ?></td>
                <td><?= $this->Number->format($iteItem->file_id) ?></td>
                <td><?= $this->Number->format($iteItem->year) ?></td>
                <td><?= $this->Number->format($iteItem->decree) ?></td>
                <td><?= $this->Number->format($iteItem->price) ?></td>
                <td><?= $this->Number->format($iteItem->sector_id) ?></td>
                <td><?= $iteItem->has('ite_budget') ? $this->Html->link($iteItem->ite_budget->value, ['controller' => 'IteBudgets', 'action' => 'view', $iteItem->ite_budget->value]) : '' ?></td>
                <td><?= $iteItem->has('ite_acquisition_type') ? $this->Html->link($iteItem->ite_acquisition_type->value, ['controller' => 'IteAcquisitionTypes', 'action' => 'view', $iteItem->ite_acquisition_type->value]) : '' ?></td>
                <td><?= $iteItem->has('ite_status') ? $this->Html->link($iteItem->ite_status->value, ['controller' => 'IteStatuses', 'action' => 'view', $iteItem->ite_status->value]) : '' ?></td>
                <td><?= $iteItem->has('ite_class') ? $this->Html->link($iteItem->ite_class->value, ['controller' => 'IteClasses', 'action' => 'view', $iteItem->ite_class->value]) : '' ?></td>
                <td><?= $iteItem->has('ite_type') ? $this->Html->link($iteItem->ite_type->value, ['controller' => 'IteTypes', 'action' => 'view', $iteItem->ite_type->value]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $iteItem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $iteItem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $iteItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iteItem->id)]) ?>
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
