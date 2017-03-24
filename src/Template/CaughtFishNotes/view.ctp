<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Caught Fish Note'), ['action' => 'edit', $caughtFishNote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Caught Fish Note'), ['action' => 'delete', $caughtFishNote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFishNote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Caught Fish Notes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Caught Fish Note'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caughtFishNotes view large-9 medium-8 columns content">
    <h3><?= h($caughtFishNote->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caughtFishNote->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Caught Fish Id') ?></th>
            <td><?= $this->Number->format($caughtFishNote->caught_fish_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($caughtFishNote->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($caughtFishNote->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($caughtFishNote->note)); ?>
    </div>
</div>
