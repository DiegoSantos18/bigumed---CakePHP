<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medico[]|\Cake\Collection\CollectionInterface $medicos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Medico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medicos index large-9 medium-8 columns content">
    <h3><?= __('Medicos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('medico_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('crm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('especialidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medicos as $medico): ?>
            <tr>
                <td><?= $this->Number->format($medico->medico_id) ?></td>
                <td><?= h($medico->crm) ?></td>
                <td><?= h($medico->especialidade) ?></td>
                <td><?= $medico->has('user') ? $this->Html->link($medico->user->usuario_id, ['controller' => 'Users', 'action' => 'view', $medico->user->usuario_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $medico->medico_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medico->medico_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medico->medico_id], ['confirm' => __('Are you sure you want to delete # {0}?', $medico->medico_id)]) ?>
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
