<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tel Phone'), ['action' => 'edit', $telPhone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tel Phone'), ['action' => 'delete', $telPhone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telPhone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tel Phones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tel Phone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tel Phone Types'), ['controller' => 'TelPhoneTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tel Phone Type'), ['controller' => 'TelPhoneTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tel Phone Companies'), ['controller' => 'TelPhoneCompanies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tel Phone Company'), ['controller' => 'TelPhoneCompanies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Per Persons'), ['controller' => 'PerPersons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Per Person'), ['controller' => 'PerPersons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="telPhones view large-9 medium-8 columns content">
    <h3><?= h($telPhone->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($telPhone->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel Phone Type') ?></th>
            <td><?= $telPhone->has('tel_phone_type') ? $this->Html->link($telPhone->tel_phone_type->id, ['controller' => 'TelPhoneTypes', 'action' => 'view', $telPhone->tel_phone_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel Phone Company') ?></th>
            <td><?= $telPhone->has('tel_phone_company') ? $this->Html->link($telPhone->tel_phone_company->id, ['controller' => 'TelPhoneCompanies', 'action' => 'view', $telPhone->tel_phone_company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Per Person') ?></th>
            <td><?= $telPhone->has('per_person') ? $this->Html->link($telPhone->per_person->name, ['controller' => 'PerPersons', 'action' => 'view', $telPhone->per_person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($telPhone->id) ?></td>
        </tr>
    </table>
</div>
