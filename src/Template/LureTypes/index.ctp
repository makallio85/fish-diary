<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lure Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lures'), ['controller' => 'Lures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lure'), ['controller' => 'Lures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lureTypes index large-9 medium-8 columns content">
    <h3><?= __('Lure Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lureTypes as $lureType): ?>
            <tr>
                <td><?= $this->Number->format($lureType->id) ?></td>
                <td><?= h($lureType->name) ?></td>
                <td><?= h($lureType->created) ?></td>
                <td><?= h($lureType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lureType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lureType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lureType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lureType->id)]) ?>
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
