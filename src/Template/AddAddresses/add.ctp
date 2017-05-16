<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Add Addresses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="addAddresses form large-9 medium-8 columns content">
    <?= $this->Form->create($addAddress) ?>
    <fieldset>
        <legend><?= __('Add Add Address') ?></legend>
        <?php
            echo $this->Form->control('street');
            echo $this->Form->control('number');
            echo $this->Form->control('cp');
            echo $this->Form->control('district');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
