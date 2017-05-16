<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aso Items Propieties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ite Items'), ['controller' => 'IteItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Item'), ['controller' => 'IteItems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Propieties'), ['controller' => 'ItePropieties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Propiety'), ['controller' => 'ItePropieties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Propiety Values'), ['controller' => 'ItePropietyValues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Propiety Value'), ['controller' => 'ItePropietyValues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="asoItemsPropieties form large-9 medium-8 columns content">
    <?= $this->Form->create($asoItemsPropiety) ?>
    <fieldset>
        <legend><?= __('Add Aso Items Propiety') ?></legend>
        <?php
            echo $this->Form->control('propiety_value_id', ['options' => $itePropietyValues]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
