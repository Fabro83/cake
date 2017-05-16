<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ite Propiety Value'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ite Propieties'), ['controller' => 'ItePropieties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ite Propiety'), ['controller' => 'ItePropieties', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itePropietyValues index large-9 medium-8 columns content">
    <h3><?= __('Ite Propiety Values') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('propiety_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itePropietyValues as $itePropietyValue): ?>
            <tr>
                <td><?= $this->Number->format($itePropietyValue->id) ?></td>
                <td><?= $itePropietyValue->has('ite_propiety') ? $this->Html->link($itePropietyValue->ite_propiety->id, ['controller' => 'ItePropieties', 'action' => 'view', $itePropietyValue->ite_propiety->id]) : '' ?></td>
                <td><?= h($itePropietyValue->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itePropietyValue->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itePropietyValue->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itePropietyValue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itePropietyValue->id)]) ?>
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
