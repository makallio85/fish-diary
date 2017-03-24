<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lure Type'), ['action' => 'edit', $lureType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lure Type'), ['action' => 'delete', $lureType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lureType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lure Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lure Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lures'), ['controller' => 'Lures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lure'), ['controller' => 'Lures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lureTypes view large-9 medium-8 columns content">
    <h3><?= h($lureType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($lureType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lureType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lureType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lureType->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Lures') ?></h4>
        <?php if (!empty($lureType->lures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Lure Type Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lureType->lures as $lures): ?>
            <tr>
                <td><?= h($lures->id) ?></td>
                <td><?= h($lures->lure_type_id) ?></td>
                <td><?= h($lures->name) ?></td>
                <td><?= h($lures->created) ?></td>
                <td><?= h($lures->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lures', 'action' => 'view', $lures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lures', 'action' => 'edit', $lures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lures', 'action' => 'delete', $lures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
