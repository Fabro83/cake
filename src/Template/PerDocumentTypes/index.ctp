<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Per Document Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perDocumentTypes index large-9 medium-8 columns content">
    <h3><?= __('Per Document Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perDocumentTypes as $perDocumentType): ?>
            <tr>
                <td><?= $this->Number->format($perDocumentType->id) ?></td>
                <td><?= h($perDocumentType->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $perDocumentType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perDocumentType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perDocumentType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perDocumentType->id)]) ?>
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
