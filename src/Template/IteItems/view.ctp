<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ite Item'), ['action' => 'edit', $iteItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ite Item'), ['action' => 'delete', $iteItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iteItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ite Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ite Budgets'), ['controller' => 'IteBudgets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Budget'), ['controller' => 'IteBudgets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ite Acquisition Types'), ['controller' => 'IteAcquisitionTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Acquisition Type'), ['controller' => 'IteAcquisitionTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ite Statuses'), ['controller' => 'IteStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Status'), ['controller' => 'IteStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ite Classes'), ['controller' => 'IteClasses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Class'), ['controller' => 'IteClasses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ite Types'), ['controller' => 'IteTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Type'), ['controller' => 'IteTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="iteItems view large-9 medium-8 columns content">
    <h3><?= h($iteItem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ite Budget') ?></th>
            <td><?= $iteItem->has('ite_budget') ? $this->Html->link($iteItem->ite_budget->id, ['controller' => 'IteBudgets', 'action' => 'view', $iteItem->ite_budget->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ite Acquisition Type') ?></th>
            <td><?= $iteItem->has('ite_acquisition_type') ? $this->Html->link($iteItem->ite_acquisition_type->id, ['controller' => 'IteAcquisitionTypes', 'action' => 'view', $iteItem->ite_acquisition_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ite Status') ?></th>
            <td><?= $iteItem->has('ite_status') ? $this->Html->link($iteItem->ite_status->id, ['controller' => 'IteStatuses', 'action' => 'view', $iteItem->ite_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ite Class') ?></th>
            <td><?= $iteItem->has('ite_class') ? $this->Html->link($iteItem->ite_class->id, ['controller' => 'IteClasses', 'action' => 'view', $iteItem->ite_class->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ite Type') ?></th>
            <td><?= $iteItem->has('ite_type') ? $this->Html->link($iteItem->ite_type->id, ['controller' => 'IteTypes', 'action' => 'view', $iteItem->ite_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($iteItem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Id') ?></th>
            <td><?= $this->Number->format($iteItem->file_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $this->Number->format($iteItem->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Decree') ?></th>
            <td><?= $this->Number->format($iteItem->decree) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($iteItem->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sector Id') ?></th>
            <td><?= $this->Number->format($iteItem->sector_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($iteItem->comment)); ?>
    </div>
    <div class="row">
        <h4><?= __('Picture') ?></h4>
        <?= $this->Text->autoParagraph(h($iteItem->picture)); ?>
    </div>
</div>
