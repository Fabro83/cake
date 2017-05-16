<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tel Phone'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tel Phone Types'), ['controller' => 'TelPhoneTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tel Phone Type'), ['controller' => 'TelPhoneTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tel Phone Companies'), ['controller' => 'TelPhoneCompanies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tel Phone Company'), ['controller' => 'TelPhoneCompanies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Per Persons'), ['controller' => 'PerPersons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Per Person'), ['controller' => 'PerPersons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="telPhones index large-9 medium-8 columns content">
    <h3><?= __('Tel Phones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($telPhones as $telPhone): ?>
            <tr>
                <td><?= $this->Number->format($telPhone->id) ?></td>
                <td><?= h($telPhone->value) ?></td>
                <td><?= $telPhone->has('tel_phone_type') ? $this->Html->link($telPhone->tel_phone_type->id, ['controller' => 'TelPhoneTypes', 'action' => 'view', $telPhone->tel_phone_type->id]) : '' ?></td>
                <td><?= $telPhone->has('tel_phone_company') ? $this->Html->link($telPhone->tel_phone_company->id, ['controller' => 'TelPhoneCompanies', 'action' => 'view', $telPhone->tel_phone_company->id]) : '' ?></td>
                <td><?= $telPhone->has('per_person') ? $this->Html->link($telPhone->per_person->name, ['controller' => 'PerPersons', 'action' => 'view', $telPhone->per_person->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $telPhone->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $telPhone->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $telPhone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telPhone->id)]) ?>
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
