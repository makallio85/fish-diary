<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
echo $this->element('Menu/menu');
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Lure'), ['action' => 'edit', $lure->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Lure'), ['action' => 'delete', $lure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lure->id)]) ?> </li>
<li><?= $this->Html->link(__('List Lures'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Lure'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Lure Types'), ['controller' => 'LureTypes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Lure Type'), ['controller' => 'LureTypes', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Type') ?></td>
            <td><?= $lure->has('lure_type') ? $this->Html->link($lure->lure_type->name, ['controller' => 'LureTypes', 'action' => 'view', $lure->lure_type->id]) : '' ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Caught fishes') ?></h3>
    </div>
    <?php if (!empty($lure->caught_fishes)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Type') ?></th>
                <th><?= __('Time') ?></th>
                <th><?= __('Place') ?></th>
                <th class="hidden-xs"><?= __('Length') ?></th>
                <th class="hidden-xs actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($lure->caught_fishes as $caughtFish): ?>
                <tr>
                    <td>
                        <?= $caughtFish->has('fish_type') ? $this->Html->link($caughtFish->fish_type->name,
                            ['controller' => 'CaughtFishes', 'action' => 'view', $caughtFish->id]) : '' ?>
                    </td>
                    <td><?= h($caughtFish->caught_time->format('Y-m-d')) ?></td>
                    <td><?= h($caughtFish->fishing_place->name) ?></td>
                    <td class="hidden-xs"><?= h($caughtFish->length) ?></td>
                    <td class="hidden-xs actions">
                        <?= $this->Html->link('', ['controller' => 'CaughtFishes', 'action' => 'view', $caughtFish->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
