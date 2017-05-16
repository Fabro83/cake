<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Add Address Type'), ['action' => 'edit', $addAddressType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Add Address Type'), ['action' => 'delete', $addAddressType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addAddressType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Add Address Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Add Address Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="addAddressTypes view large-9 medium-8 columns content">
    <h3><?= h($addAddressType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($addAddressType->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($addAddressType->id) ?></td>
        </tr>
    </table>
</div>
