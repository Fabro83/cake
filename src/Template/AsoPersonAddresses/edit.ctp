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
                ['action' => 'delete', $asoPersonAddress->person_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $asoPersonAddress->person_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Aso Person Addresses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Add Addresses'), ['controller' => 'AddAddresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Add Address'), ['controller' => 'AddAddresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Add Address Types'), ['controller' => 'AddAddressTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Add Address Type'), ['controller' => 'AddAddressTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="asoPersonAddresses form large-9 medium-8 columns content">
    <?= $this->Form->create($asoPersonAddress) ?>
    <fieldset>
        <legend><?= __('Edit Aso Person Address') ?></legend>
        <?php
            echo $this->Form->control('address_type_id', ['options' => $addAddressTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
