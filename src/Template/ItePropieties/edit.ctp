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
                ['action' => 'delete', $itePropiety->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itePropiety->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ite Propieties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ite Types'), ['controller' => 'IteTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Type'), ['controller' => 'IteTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Field Types'), ['controller' => 'IteFieldTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Field Type'), ['controller' => 'IteFieldTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itePropieties form large-9 medium-8 columns content">
    <?= $this->Form->create($itePropiety) ?>
    <fieldset>
        <legend><?= __('Edit Ite Propiety') ?></legend>
        <?php
            echo $this->Form->control('item_types_id', ['options' => $iteTypes]);
            echo $this->Form->control('value');
            echo $this->Form->control('field_type_id', ['options' => $iteFieldTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
