<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ite Propiety Value'), ['action' => 'edit', $itePropietyValue->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ite Propiety Value'), ['action' => 'delete', $itePropietyValue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itePropietyValue->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ite Propiety Values'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Propiety Value'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ite Propieties'), ['controller' => 'ItePropieties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Propiety'), ['controller' => 'ItePropieties', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itePropietyValues view large-9 medium-8 columns content">
    <h3><?= h($itePropietyValue->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ite Propiety') ?></th>
            <td><?= $itePropietyValue->has('ite_propiety') ? $this->Html->link($itePropietyValue->ite_propiety->id, ['controller' => 'ItePropieties', 'action' => 'view', $itePropietyValue->ite_propiety->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($itePropietyValue->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($itePropietyValue->id) ?></td>
        </tr>
    </table>
</div>
