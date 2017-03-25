<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Caught Fish'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List FishTypes'), ['controller' => 'FishTypes', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Fish Type'), ['controller' => 'FishTypes', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List FishingPlaces'), ['controller' => 'FishingPlaces', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Fishing Place'), ['controller' => 'FishingPlaces', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Lures'), ['controller' => 'Lures', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Lure'), ['controller' => 'Lures', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List WeatherTypes'), ['controller' => 'WeatherTypes', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Weather Type'), ['controller' => 'WeatherTypes', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List CaughtFishNotes'), ['controller' => 'CaughtFishNotes', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Caught Fish Note'), ['controller' => 'CaughtFishNotes', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List CaughtFishPhotos'), ['controller' => 'CaughtFishPhotos', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Caught Fish Photo'), ['controller' => 'CaughtFishPhotos', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('fish_type_id'); ?></th>
            <th><?= $this->Paginator->sort('fishing_place_id'); ?></th>
            <th><?= $this->Paginator->sort('lure_id'); ?></th>
            <th><?= $this->Paginator->sort('caught_time'); ?></th>
            <th><?= $this->Paginator->sort('released'); ?></th>
            <th><?= $this->Paginator->sort('weight'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($caughtFishes as $caughtFish): ?>
        <tr>
            <td><?= $this->Number->format($caughtFish->id) ?></td>
            <td>
                <?= $caughtFish->has('fish_type') ? $this->Html->link($caughtFish->fish_type->name, ['controller' => 'FishTypes', 'action' => 'view', $caughtFish->fish_type->id]) : '' ?>
            </td>
            <td>
                <?= $caughtFish->has('fishing_place') ? $this->Html->link($caughtFish->fishing_place->name, ['controller' => 'FishingPlaces', 'action' => 'view', $caughtFish->fishing_place->id]) : '' ?>
            </td>
            <td>
                <?= $caughtFish->has('lure') ? $this->Html->link($caughtFish->lure->name, ['controller' => 'Lures', 'action' => 'view', $caughtFish->lure->id]) : '' ?>
            </td>
            <td><?= h($caughtFish->caught_time) ?></td>
            <td><?= h($caughtFish->released) ?></td>
            <td><?= $this->Number->format($caughtFish->weight) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $caughtFish->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $caughtFish->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $caughtFish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFish->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
