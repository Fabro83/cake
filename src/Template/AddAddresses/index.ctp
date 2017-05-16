<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Add Address'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="addAddresses index large-9 medium-8 columns content">
    <h3><?= __('Add Addresses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($addAddresses as $addAddress): ?>
            <tr>
                <td><?= $this->Number->format($addAddress->id) ?></td>
                <td><?= h($addAddress->street) ?></td>
                <td><?= h($addAddress->number) ?></td>
                <td><?= h($addAddress->cp) ?></td>
                <td><?= h($addAddress->district) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $addAddress->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $addAddress->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $addAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addAddress->id)]) ?>
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
