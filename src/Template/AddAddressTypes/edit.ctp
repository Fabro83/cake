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
                ['action' => 'delete', $addAddressType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $addAddressType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Add Address Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="addAddressTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($addAddressType) ?>
    <fieldset>
        <legend><?= __('Edit Add Address Type') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
