<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aso Items Propiety'), ['action' => 'edit', $asoItemsPropiety->item_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aso Items Propiety'), ['action' => 'delete', $asoItemsPropiety->item_id], ['confirm' => __('Are you sure you want to delete # {0}?', $asoItemsPropiety->item_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aso Items Propieties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aso Items Propiety'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ite Items'), ['controller' => 'IteItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Item'), ['controller' => 'IteItems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ite Propieties'), ['controller' => 'ItePropieties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Propiety'), ['controller' => 'ItePropieties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ite Propiety Values'), ['controller' => 'ItePropietyValues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Propiety Value'), ['controller' => 'ItePropietyValues', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="asoItemsPropieties view large-9 medium-8 columns content">
    <h3><?= h($asoItemsPropiety->item_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ite Item') ?></th>
            <td><?= $asoItemsPropiety->has('ite_item') ? $this->Html->link($asoItemsPropiety->ite_item->id, ['controller' => 'IteItems', 'action' => 'view', $asoItemsPropiety->ite_item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ite Propiety') ?></th>
            <td><?= $asoItemsPropiety->has('ite_propiety') ? $this->Html->link($asoItemsPropiety->ite_propiety->id, ['controller' => 'ItePropieties', 'action' => 'view', $asoItemsPropiety->ite_propiety->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ite Propiety Value') ?></th>
            <td><?= $asoItemsPropiety->has('ite_propiety_value') ? $this->Html->link($asoItemsPropiety->ite_propiety_value->id, ['controller' => 'ItePropietyValues', 'action' => 'view', $asoItemsPropiety->ite_propiety_value->id]) : '' ?></td>
        </tr>
    </table>
</div>
