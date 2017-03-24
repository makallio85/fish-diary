<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fishing Place Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fishingPlaceTypes index large-9 medium-8 columns content">
    <h3><?= __('Fishing Place Types') ?></h3>
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
            <?php foreach ($fishingPlaceTypes as $fishingPlaceType): ?>
            <tr>
                <td><?= $this->Number->format($fishingPlaceType->id) ?></td>
                <td><?= h($fishingPlaceType->name) ?></td>
                <td><?= h($fishingPlaceType->created) ?></td>
                <td><?= h($fishingPlaceType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fishingPlaceType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fishingPlaceType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fishingPlaceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fishingPlaceType->id)]) ?>
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
