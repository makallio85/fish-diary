<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Lure Type'), ['action' => 'edit', $lureType->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Lure Type'), ['action' => 'delete', $lureType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lureType->id)]) ?> </li>
<li><?= $this->Html->link(__('List Lure Types'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Lure Type'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Lures'), ['controller' => 'Lures', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Lure'), ['controller' => 'Lures', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Lure Type'), ['action' => 'edit', $lureType->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Lure Type'), ['action' => 'delete', $lureType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lureType->id)]) ?> </li>
<li><?= $this->Html->link(__('List Lure Types'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Lure Type'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Lures'), ['controller' => 'Lures', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Lure'), ['controller' => 'Lures', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($lureType->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($lureType->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($lureType->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($lureType->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($lureType->modified) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Lures') ?></h3>
    </div>
    <?php if (!empty($lureType->lures)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Lure Type Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($lureType->lures as $lures): ?>
                <tr>
                    <td><?= h($lures->id) ?></td>
                    <td><?= h($lures->lure_type_id) ?></td>
                    <td><?= h($lures->name) ?></td>
                    <td><?= h($lures->created) ?></td>
                    <td><?= h($lures->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Lures', 'action' => 'view', $lures->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Lures', 'action' => 'edit', $lures->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Lures', 'action' => 'delete', $lures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lures->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Lures</p>
    <?php endif; ?>
</div>
