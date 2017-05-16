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
                ['action' => 'delete', $itePropietyValue->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itePropietyValue->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ite Propiety Values'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ite Propieties'), ['controller' => 'ItePropieties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Propiety'), ['controller' => 'ItePropieties', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itePropietyValues form large-9 medium-8 columns content">
    <?= $this->Form->create($itePropietyValue) ?>
    <fieldset>
        <legend><?= __('Edit Ite Propiety Value') ?></legend>
        <?php
            echo $this->Form->control('propiety_id', ['options' => $itePropieties]);
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
