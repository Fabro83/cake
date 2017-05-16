<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ite Propiety'), ['action' => 'edit', $itePropiety->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ite Propiety'), ['action' => 'delete', $itePropiety->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itePropiety->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ite Propieties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Propiety'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ite Types'), ['controller' => 'IteTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Type'), ['controller' => 'IteTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ite Field Types'), ['controller' => 'IteFieldTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Field Type'), ['controller' => 'IteFieldTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itePropieties view large-9 medium-8 columns content">
    <h3><?= h($itePropiety->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ite Type') ?></th>
            <td><?= $itePropiety->has('ite_type') ? $this->Html->link($itePropiety->ite_type->id, ['controller' => 'IteTypes', 'action' => 'view', $itePropiety->ite_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ite Field Type') ?></th>
            <td><?= $itePropiety->has('ite_field_type') ? $this->Html->link($itePropiety->ite_field_type->id, ['controller' => 'IteFieldTypes', 'action' => 'view', $itePropiety->ite_field_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($itePropiety->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Value') ?></h4>
        <?= $this->Text->autoParagraph(h($itePropiety->value)); ?>
    </div>
</div>
