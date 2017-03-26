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
        <th><?= $this->Paginator->sort('length', __('Length')); ?></th>
        <th class="actions"><?= __('Actions'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($caughtFishes as $caughtFish): ?>
        <tr>
            <td>
                <?= $caughtFish->has('fish_type') ? $this->Html->link($caughtFish->fish_type->name,
                    ['controller' => 'FishTypes', 'action' => 'view', $caughtFish->fish_type->id]) : '' ?>
            </td>
            <td><?= h($caughtFish->caught_time->format('Y-m-d')) ?></td>
            <td><?= h($caughtFish->fishing_place->name) ?></td>
            <td><?= h($caughtFish->length) ?></td>
            <td class="actions">
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
