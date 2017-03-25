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
    <?php if (!empty($lureType->lures)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($lureType->lures as $lures): ?>
                <tr>
                    <td><?= h($lures->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Lures', 'action' => 'view', $lures->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
