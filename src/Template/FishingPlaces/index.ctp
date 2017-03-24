<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fishing Place'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fishingPlaces index large-9 medium-8 columns content">
    <h3><?= __('Fishing Places') ?></h3>
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
            <?php foreach ($fishingPlaces as $fishingPlace): ?>
            <tr>
                <td><?= $this->Number->format($fishingPlace->id) ?></td>
                <td><?= h($fishingPlace->name) ?></td>
                <td><?= h($fishingPlace->created) ?></td>
                <td><?= h($fishingPlace->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fishingPlace->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fishingPlace->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fishingPlace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fishingPlace->id)]) ?>
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
