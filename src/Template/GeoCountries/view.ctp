<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Geo Country'), ['action' => 'edit', $geoCountry->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Geo Country'), ['action' => 'delete', $geoCountry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geoCountry->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Geo Countries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Geo Country'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="geoCountries view large-9 medium-8 columns content">
    <h3><?= h($geoCountry->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($geoCountry->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($geoCountry->id) ?></td>
        </tr>
    </table>
</div>
