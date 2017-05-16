<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Per Genders'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="perGenders form large-9 medium-8 columns content">
    <?= $this->Form->create($perGender) ?>
    <fieldset>
        <legend><?= __('Add Per Gender') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
