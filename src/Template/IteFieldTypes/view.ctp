<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ite Field Type'), ['action' => 'edit', $iteFieldType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ite Field Type'), ['action' => 'delete', $iteFieldType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iteFieldType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ite Field Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Field Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="iteFieldTypes view large-9 medium-8 columns content">
    <h3><?= h($iteFieldType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($iteFieldType->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($iteFieldType->id) ?></td>
        </tr>
    </table>
</div>
