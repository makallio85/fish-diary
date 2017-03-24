<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Lure'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List LureTypes'), ['controller' => 'LureTypes', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Lure Type'), ['controller' => 'LureTypes', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List CaughtFishes'), ['controller' => 'CaughtFishes', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('lure_type_id'); ?></th>
            <th><?= $this->Paginator->sort('name'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lures as $lure): ?>
        <tr>
            <td><?= $this->Number->format($lure->id) ?></td>
            <td>
                <?= $lure->has('lure_type') ? $this->Html->link($lure->lure_type->name, ['controller' => 'LureTypes', 'action' => 'view', $lure->lure_type->id]) : '' ?>
            </td>
            <td><?= h($lure->name) ?></td>
            <td><?= h($lure->created) ?></td>
            <td><?= h($lure->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $lure->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $lure->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $lure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lure->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
