<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
echo $this->element('Menu/menu');
$this->end();

$this->start('tb_sidebar');
echo $this->element('Menu/menu');
$this->end();
?>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Caught fishes') ?></h3>
    </div>
    <?php if (!empty($fishingPlace->caught_fishes)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Type') ?></th>
                <th><?= __('Time') ?></th>
                <th ><?= __('Length') ?></th>
                <th class="hidden-xs actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($fishingPlace->caught_fishes as $caughtFish): ?>
                <tr>
                    <td>
                        <?= $caughtFish->has('fish_type') ? $this->Html->link($caughtFish->fish_type->name,
                            ['controller' => 'CaughtFishes', 'action' => 'view', $caughtFish->id]) : '' ?>
                    </td>
                    <td><?= h($caughtFish->caught_time->format('Y-m-d')) ?></td>
                    <td><?= h($caughtFish->length) ?></td>
                    <td class="hidden-xs actions">
                        <?= $this->Html->link('', ['controller' => 'CaughtFishes', 'action' => 'view', $caughtFish->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related CaughtFishes</p>
    <?php endif; ?>
</div>
