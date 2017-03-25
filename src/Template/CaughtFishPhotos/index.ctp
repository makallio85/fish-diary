<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Caught Fish Photo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caughtFishPhotos index large-9 medium-8 columns content">
    <h3><?= __('Caught Fish Photos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('caught_fish_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($caughtFishPhotos as $caughtFishPhoto): ?>
            <tr>
                <td><?= $this->Number->format($caughtFishPhoto->id) ?></td>
                <td><?= h($caughtFishPhoto->photo) ?></td>
                <td><?= h($caughtFishPhoto->photo_dir) ?></td>
                <td><?= h($caughtFishPhoto->created) ?></td>
                <td><?= h($caughtFishPhoto->modified) ?></td>
                <td><?= $this->Number->format($caughtFishPhoto->caught_fish_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $caughtFishPhoto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caughtFishPhoto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caughtFishPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFishPhoto->id)]) ?>
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
