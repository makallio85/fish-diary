<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lure'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lure Types'), ['controller' => 'LureTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lure Type'), ['controller' => 'LureTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lures index large-9 medium-8 columns content">
    <h3><?= __('Lures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lure_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lures as $lure): ?>
            <tr>
                <td><?= $this->Number->format($lure->id) ?></td>
                <td><?= $lure->has('lure_type') ? $this->Html->link($lure->lure_type->name, ['controller' => 'LureTypes', 'action' => 'view', $lure->lure_type->id]) : '' ?></td>
                <td><?= h($lure->name) ?></td>
                <td><?= h($lure->created) ?></td>
                <td><?= h($lure->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lure->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lure->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lure->id)]) ?>
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
