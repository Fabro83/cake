<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ite Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ite Classes'), ['controller' => 'IteClasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Class'), ['controller' => 'IteClasses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="iteTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($iteType) ?>
    <fieldset>
        <legend><?= __('Add Ite Type') ?></legend>
        <?php
            echo $this->Form->control('item_class_id', ['options' => $iteClasses]);
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
