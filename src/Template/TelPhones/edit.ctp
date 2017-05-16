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
                ['action' => 'delete', $telPhone->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $telPhone->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tel Phones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tel Phone Types'), ['controller' => 'TelPhoneTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tel Phone Type'), ['controller' => 'TelPhoneTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tel Phone Companies'), ['controller' => 'TelPhoneCompanies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tel Phone Company'), ['controller' => 'TelPhoneCompanies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Per Persons'), ['controller' => 'PerPersons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Per Person'), ['controller' => 'PerPersons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="telPhones form large-9 medium-8 columns content">
    <?= $this->Form->create($telPhone) ?>
    <fieldset>
        <legend><?= __('Edit Tel Phone') ?></legend>
        <?php
            echo $this->Form->control('value');
            echo $this->Form->control('phone_type_id', ['options' => $telPhoneTypes]);
            echo $this->Form->control('phone_company_id', ['options' => $telPhoneCompanies]);
            echo $this->Form->control('person_id', ['options' => $perPersons]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
