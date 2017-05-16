<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ite Type'), ['action' => 'edit', $iteType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ite Type'), ['action' => 'delete', $iteType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iteType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ite Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ite Classes'), ['controller' => 'IteClasses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Class'), ['controller' => 'IteClasses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="iteTypes view large-9 medium-8 columns content">
    <h3><?= h($iteType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ite Class') ?></th>
            <td><?= $iteType->has('ite_class') ? $this->Html->link($iteType->ite_class->id, ['controller' => 'IteClasses', 'action' => 'view', $iteType->ite_class->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($iteType->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($iteType->id) ?></td>
        </tr>
    </table>
</div>
