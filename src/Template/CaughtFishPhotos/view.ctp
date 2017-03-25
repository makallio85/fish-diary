<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Caught Fish Photo'), ['action' => 'edit', $caughtFishPhoto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Caught Fish Photo'), ['action' => 'delete', $caughtFishPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFishPhoto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Caught Fish Photos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Caught Fish Photo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caughtFishPhotos view large-9 medium-8 columns content">
    <h3><?= h($caughtFishPhoto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($caughtFishPhoto->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= h($caughtFishPhoto->photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caughtFishPhoto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Caught Fish Id') ?></th>
            <td><?= $this->Number->format($caughtFishPhoto->caught_fish_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($caughtFishPhoto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($caughtFishPhoto->modified) ?></td>
        </tr>
    </table>
</div>
