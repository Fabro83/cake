<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aso Items Propiety'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Items'), ['controller' => 'IteItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Item'), ['controller' => 'IteItems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Propieties'), ['controller' => 'ItePropieties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Propiety'), ['controller' => 'ItePropieties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Propiety Values'), ['controller' => 'ItePropietyValues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Propiety Value'), ['controller' => 'ItePropietyValues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="asoItemsPropieties index large-9 medium-8 columns content">
    <h3><?= __('Aso Items Propieties') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('propiety_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('propiety_value_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($asoItemsPropieties as $asoItemsPropiety): ?>
            <tr>
                <td><?= $asoItemsPropiety->has('ite_item') ? $this->Html->link($asoItemsPropiety->ite_item->id, ['controller' => 'IteItems', 'action' => 'view', $asoItemsPropiety->ite_item->id]) : '' ?></td>
                <td><?= $asoItemsPropiety->has('ite_propiety') ? $this->Html->link($asoItemsPropiety->ite_propiety->id, ['controller' => 'ItePropieties', 'action' => 'view', $asoItemsPropiety->ite_propiety->id]) : '' ?></td>
                <td><?= $asoItemsPropiety->has('ite_propiety_value') ? $this->Html->link($asoItemsPropiety->ite_propiety_value->id, ['controller' => 'ItePropietyValues', 'action' => 'view', $asoItemsPropiety->ite_propiety_value->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $asoItemsPropiety->item_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asoItemsPropiety->item_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $asoItemsPropiety->item_id], ['confirm' => __('Are you sure you want to delete # {0}?', $asoItemsPropiety->item_id)]) ?>
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
