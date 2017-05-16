<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aso Person Address'), ['action' => 'edit', $asoPersonAddress->person_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aso Person Address'), ['action' => 'delete', $asoPersonAddress->person_id], ['confirm' => __('Are you sure you want to delete # {0}?', $asoPersonAddress->person_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aso Person Addresses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aso Person Address'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Add Addresses'), ['controller' => 'AddAddresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Add Address'), ['controller' => 'AddAddresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Add Address Types'), ['controller' => 'AddAddressTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Add Address Type'), ['controller' => 'AddAddressTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="asoPersonAddresses view large-9 medium-8 columns content">
    <h3><?= h($asoPersonAddress->person_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Add Address') ?></th>
            <td><?= $asoPersonAddress->has('add_address') ? $this->Html->link($asoPersonAddress->add_address->id, ['controller' => 'AddAddresses', 'action' => 'view', $asoPersonAddress->add_address->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Add Address Type') ?></th>
            <td><?= $asoPersonAddress->has('add_address_type') ? $this->Html->link($asoPersonAddress->add_address_type->id, ['controller' => 'AddAddressTypes', 'action' => 'view', $asoPersonAddress->add_address_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Person Id') ?></th>
            <td><?= $this->Number->format($asoPersonAddress->person_id) ?></td>
        </tr>
    </table>
</div>
