<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Per Document Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="perDocumentTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($perDocumentType) ?>
    <fieldset>
        <legend><?= __('Add Per Document Type') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
