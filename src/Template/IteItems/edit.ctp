<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $iteItem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $iteItem->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ite Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ite Budgets'), ['controller' => 'IteBudgets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Budget'), ['controller' => 'IteBudgets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Acquisition Types'), ['controller' => 'IteAcquisitionTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Acquisition Type'), ['controller' => 'IteAcquisitionTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Statuses'), ['controller' => 'IteStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Status'), ['controller' => 'IteStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Classes'), ['controller' => 'IteClasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Class'), ['controller' => 'IteClasses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Types'), ['controller' => 'IteTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Type'), ['controller' => 'IteTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="iteItems form large-9 medium-8 columns content">
    <?= $this->Form->create($iteItem) ?>
    <fieldset>
        <legend><?= __('Edit Ite Item') ?></legend>
        <?php
            echo $this->Form->control('file_id');
            echo $this->Form->control('year');
            echo $this->Form->control('decree');
            echo $this->Form->control('comment');
            echo $this->Form->control('price');
            echo $this->Form->control('picture');
            echo $this->Form->control('sector_id');
            echo $this->Form->control('budget_id', ['options' => $iteBudgets, 'empty' => true]);
            echo $this->Form->control('acquisition_type_id', ['options' => $iteAcquisitionTypes, 'empty' => true]);
            echo $this->Form->control('status_id', ['options' => $iteStatuses]);
            echo $this->Form->control('item_class_id', ['options' => $iteClasses]);
            echo $this->Form->control('item_type_id', ['options' => $iteTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
