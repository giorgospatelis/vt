<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vessel $vessel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vessel'), ['action' => 'edit', $vessel->id_vessel]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vessel'), ['action' => 'delete', $vessel->id_vessel], ['confirm' => __('Are you sure you want to delete # {0}?', $vessel->id_vessel)]) ?> </li>
        <li><?= $this->Html->link(__('List Vessels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vessel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vessels view large-9 medium-8 columns content">
    <h3><?= h($vessel->id_vessel) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Callsign') ?></th>
            <td><?= h($vessel->callsign) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Vessel') ?></th>
            <td><?= $this->Number->format($vessel->id_vessel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mmsi') ?></th>
            <td><?= $this->Number->format($vessel->mmsi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imo') ?></th>
            <td><?= $this->Number->format($vessel->imo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Length') ?></th>
            <td><?= $this->Number->format($vessel->length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Width') ?></th>
            <td><?= $this->Number->format($vessel->width) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Draught') ?></th>
            <td><?= $this->Number->format($vessel->draught) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Statuses') ?></h4>
        <?php if (!empty($vessel->statuses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Status') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vessel->statuses as $statuses): ?>
            <tr>
                <td><?= h($statuses->id_status) ?></td>
                <td><?= h($statuses->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Statuses', 'action' => 'view', $statuses->id_status]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Statuses', 'action' => 'edit', $statuses->id_status]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Statuses', 'action' => 'delete', $statuses->id_status], ['confirm' => __('Are you sure you want to delete # {0}?', $statuses->id_status)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Types') ?></h4>
        <?php if (!empty($vessel->types)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Type') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vessel->types as $types): ?>
            <tr>
                <td><?= h($types->id_type) ?></td>
                <td><?= h($types->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Types', 'action' => 'view', $types->id_type]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Types', 'action' => 'edit', $types->id_type]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Types', 'action' => 'delete', $types->id_type], ['confirm' => __('Are you sure you want to delete # {0}?', $types->id_type)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
