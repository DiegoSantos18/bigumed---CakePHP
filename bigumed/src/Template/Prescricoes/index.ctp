<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prescrico[]|\Cake\Collection\CollectionInterface $prescricoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prescrico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medicamentos'), ['controller' => 'Medicamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medicamento'), ['controller' => 'Medicamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prescricoes index large-9 medium-8 columns content">
    <h3><?= __('Prescricoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('precricao_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodicidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_prescricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medico_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paciente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medicamento_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prescricoes as $prescrico): ?>
            <tr>
                <td><?= $this->Number->format($prescrico->precricao_id) ?></td>
                <td><?= h($prescrico->periodicidade) ?></td>
                <td><?= $this->Number->format($prescrico->quantidade) ?></td>
                <td><?= h($prescrico->duracao) ?></td>
                <td><?= h($prescrico->observacao) ?></td>
                <td><?= h($prescrico->dt_prescricao) ?></td>
                <td><?= $prescrico->has('medico') ? $this->Html->link($prescrico->medico->medico_id, ['controller' => 'Medicos', 'action' => 'view', $prescrico->medico->medico_id]) : '' ?></td>
                <td><?= $prescrico->has('paciente') ? $this->Html->link($prescrico->paciente->paciente_id, ['controller' => 'Pacientes', 'action' => 'view', $prescrico->paciente->paciente_id]) : '' ?></td>
                <td><?= $prescrico->has('medicamento') ? $this->Html->link($prescrico->medicamento->medicamento_id, ['controller' => 'Medicamentos', 'action' => 'view', $prescrico->medicamento->medicamento_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prescrico->precricao_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prescrico->precricao_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prescrico->precricao_id], ['confirm' => __('Are you sure you want to delete # {0}?', $prescrico->precricao_id)]) ?>
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
