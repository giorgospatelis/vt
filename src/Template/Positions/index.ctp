<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position[]|\Cake\Collection\CollectionInterface $positions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Position'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="positions index large-9 medium-8 columns content">
    <h3><?= __('Positions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_vessel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('heading') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course') ?></th>
                <th scope="col"><?= $this->Paginator->sort('speed') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($positions as $position): ?>
            <tr>
                <td><?= $this->Number->format($position->id_position) ?></td>
                <td><?= $this->Number->format($position->id_vessel) ?></td>
                <td><?= $this->Number->format($position->lat) ?></td>
                <td><?= $this->Number->format($position->lon) ?></td>
                <td><?= $this->Number->format($position->heading) ?></td>
                <td><?= $this->Number->format($position->course) ?></td>
                <td><?= $this->Number->format($position->speed) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $position->id_position]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $position->id_position]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $position->id_position], ['confirm' => __('Are you sure you want to delete # {0}?', $position->id_position)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
