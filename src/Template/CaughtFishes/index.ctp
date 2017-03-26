<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
echo $this->element('Menu/menu');
$this->end();
$this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>');
?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th><?= $this->Paginator->sort('fish_type_id', __('Type')); ?></th>
        <th><?= $this->Paginator->sort('caught_time', __('Time')); ?></th>
        <th><?= $this->Paginator->sort('fishing_place_id', __('Place')); ?></th>
        <th class="hidden-xs"><?= $this->Paginator->sort('length', __('Length')); ?></th>
        <th class="hidden-xs actions"><?= __('Actions'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($caughtFishes as $caughtFish): ?>
        <tr>
            <td>
                <?= $caughtFish->has('fish_type') ? $this->Html->link($caughtFish->fish_type->name,
                    ['controller' => 'CaughtFishes', 'action' => 'view', $caughtFish->id]) : '' ?>
            </td>
            <td><?= h($caughtFish->caught_time->format('Y-m-d')) ?></td>
            <td>
                <?= $caughtFish->has('fishing_place') ? $this->Html->link($caughtFish->fishing_place->name,
                    ['controller' => 'FishingPlaces', 'action' => 'view', $caughtFish->fishing_place->id]) : '' ?>
            </td>
            <td class="hidden-xs"><?= h($caughtFish->length) ?></td>
            <td class="hidden-xs" class="actions">
                <?= $this->Html->link('', ['action' => 'view', $caughtFish->id],
                    ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
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
