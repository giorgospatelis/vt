<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vessel[]|\Cake\Collection\CollectionInterface $vessels
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vessel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vessels index large-9 medium-8 columns content">
    <h3><?= __('Vessels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_vessel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mmsi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('callsign') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('length') ?></th>
                <th scope="col"><?= $this->Paginator->sort('width') ?></th>
                <th scope="col"><?= $this->Paginator->sort('draught') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vessels as $vessel): ?>
            <tr>
                <td><?= $this->Number->format($vessel->id_vessel) ?></td>
                <td><?= $this->Number->format($vessel->mmsi) ?></td>
                <td><?= h($vessel->callsign) ?></td>
                <td><?= $this->Number->format($vessel->imo) ?></td>
                <td><?= $this->Number->format($vessel->length) ?></td>
                <td><?= $this->Number->format($vessel->width) ?></td>
                <td><?= $this->Number->format($vessel->draught) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vessel->id_vessel]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vessel->id_vessel]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vessel->id_vessel], ['confirm' => __('Are you sure you want to delete # {0}?', $vessel->id_vessel)]) ?>
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
