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
        <th><?= $this->Paginator->sort('id'); ?></th>
        <th><?= $this->Paginator->sort('name'); ?></th>
        <th class="actions"><?= __('Actions'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($lureTypes as $lureType): ?>
        <tr>
            <td><?= $this->Number->format($lureType->id) ?></td>
            <td><?= h($lureType->name) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $lureType->id],
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
