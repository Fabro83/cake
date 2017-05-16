<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Per Status'), ['action' => 'edit', $perStatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Per Status'), ['action' => 'delete', $perStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perStatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Per Statuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Per Status'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perStatuses view large-9 medium-8 columns content">
    <h3><?= h($perStatus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($perStatus->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($perStatus->id) ?></td>
        </tr>
    </table>
</div>
