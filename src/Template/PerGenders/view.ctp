<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Per Gender'), ['action' => 'edit', $perGender->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Per Gender'), ['action' => 'delete', $perGender->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perGender->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Per Genders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Per Gender'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perGenders view large-9 medium-8 columns content">
    <h3><?= h($perGender->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($perGender->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($perGender->id) ?></td>
        </tr>
    </table>
</div>
