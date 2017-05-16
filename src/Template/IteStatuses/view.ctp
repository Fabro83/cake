<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ite Status'), ['action' => 'edit', $iteStatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ite Status'), ['action' => 'delete', $iteStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iteStatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ite Statuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Status'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="iteStatuses view large-9 medium-8 columns content">
    <h3><?= h($iteStatus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($iteStatus->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($iteStatus->id) ?></td>
        </tr>
    </table>
</div>
