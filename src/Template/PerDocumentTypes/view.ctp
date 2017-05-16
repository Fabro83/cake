<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Per Document Type'), ['action' => 'edit', $perDocumentType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Per Document Type'), ['action' => 'delete', $perDocumentType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perDocumentType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Per Document Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Per Document Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perDocumentTypes view large-9 medium-8 columns content">
    <h3><?= h($perDocumentType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($perDocumentType->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($perDocumentType->id) ?></td>
        </tr>
    </table>
</div>
