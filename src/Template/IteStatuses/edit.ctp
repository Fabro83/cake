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
                ['action' => 'delete', $iteStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $iteStatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ite Statuses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="iteStatuses form large-9 medium-8 columns content">
    <?= $this->Form->create($iteStatus) ?>
    <fieldset>
        <legend><?= __('Edit Ite Status') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
