<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ite Budgets'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="iteBudgets form large-9 medium-8 columns content">
    <?= $this->Form->create($iteBudget) ?>
    <fieldset>
        <legend><?= __('Add Ite Budget') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
