<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aso Person Address'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Add Addresses'), ['controller' => 'AddAddresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Add Address'), ['controller' => 'AddAddresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Add Address Types'), ['controller' => 'AddAddressTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Add Address Type'), ['controller' => 'AddAddressTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="asoPersonAddresses index large-9 medium-8 columns content">
    <h3><?= __('Aso Person Addresses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_type_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($asoPersonAddresses as $asoPersonAddress): ?>
            <tr>
                <td><?= $this->Number->format($asoPersonAddress->person_id) ?></td>
                <td><?= $asoPersonAddress->has('add_address') ? $this->Html->link($asoPersonAddress->add_address->id, ['controller' => 'AddAddresses', 'action' => 'view', $asoPersonAddress->add_address->id]) : '' ?></td>
                <td><?= $asoPersonAddress->has('add_address_type') ? $this->Html->link($asoPersonAddress->add_address_type->id, ['controller' => 'AddAddressTypes', 'action' => 'view', $asoPersonAddress->add_address_type->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $asoPersonAddress->person_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asoPersonAddress->person_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $asoPersonAddress->person_id], ['confirm' => __('Are you sure you want to delete # {0}?', $asoPersonAddress->person_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
