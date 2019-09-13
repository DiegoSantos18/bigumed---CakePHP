<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medicamento[]|\Cake\Collection\CollectionInterface $medicamentos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Medicamento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prescricoes'), ['controller' => 'Prescricoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prescrico'), ['controller' => 'Prescricoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medicamentos index large-9 medium-8 columns content">
    <h3><?= __('Medicamentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('medicamentos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_popular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_tecnico') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medicamentos as $medicamento): ?>
            <tr>
                <td><?= $this->Number->format($medicamento->medicamentos_id) ?></td>
                <td><?= h($medicamento->nome_popular) ?></td>
                <td><?= h($medicamento->nome_tecnico) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $medicamento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medicamento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medicamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicamento->id)]) ?>
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
