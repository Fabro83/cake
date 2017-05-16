<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Per Person'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perPerson index large-9 medium-8 columns content">
    <h3><?= __('Per Person') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_doc_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doc_num') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_nationality') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_marital_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perPerson as $perPerson): ?>
            <tr>
                <td><?= $this->Number->format($perPerson->id) ?></td>
                <td><?= h($perPerson->name) ?></td>
                <td><?= h($perPerson->surname) ?></td>
                <td><?= $this->Number->format($perPerson->id_doc_type) ?></td>
                <td><?= $this->Number->format($perPerson->doc_num) ?></td>
                <td><?= h($perPerson->birth_date) ?></td>
                <td><?= $this->Number->format($perPerson->id_gender) ?></td>
                <td><?= $this->Number->format($perPerson->id_nationality) ?></td>
                <td><?= $this->Number->format($perPerson->id_marital_status) ?></td>
                <td><?= $this->Number->format($perPerson->id_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $perPerson->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perPerson->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perPerson->id)]) ?>
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
