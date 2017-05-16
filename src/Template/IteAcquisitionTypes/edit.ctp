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
                ['action' => 'delete', $iteAcquisitionType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $iteAcquisitionType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ite Acquisition Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="iteAcquisitionTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($iteAcquisitionType) ?>
    <fieldset>
        <legend><?= __('Edit Ite Acquisition Type') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
