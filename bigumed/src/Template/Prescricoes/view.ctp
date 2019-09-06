<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prescrico $prescrico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prescrico'), ['action' => 'edit', $prescrico->precricao_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prescrico'), ['action' => 'delete', $prescrico->precricao_id], ['confirm' => __('Are you sure you want to delete # {0}?', $prescrico->precricao_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Prescricoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prescrico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medicamentos'), ['controller' => 'Medicamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medicamento'), ['controller' => 'Medicamentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prescricoes view large-9 medium-8 columns content">
    <h3><?= h($prescrico->precricao_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Periodicidade') ?></th>
            <td><?= h($prescrico->periodicidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duracao') ?></th>
            <td><?= h($prescrico->duracao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observacao') ?></th>
            <td><?= h($prescrico->observacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medico') ?></th>
            <td><?= $prescrico->has('medico') ? $this->Html->link($prescrico->medico->medico_id, ['controller' => 'Medicos', 'action' => 'view', $prescrico->medico->medico_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paciente') ?></th>
            <td><?= $prescrico->has('paciente') ? $this->Html->link($prescrico->paciente->paciente_id, ['controller' => 'Pacientes', 'action' => 'view', $prescrico->paciente->paciente_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medicamento') ?></th>
            <td><?= $prescrico->has('medicamento') ? $this->Html->link($prescrico->medicamento->id, ['controller' => 'Medicamentos', 'action' => 'view', $prescrico->medicamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precricao Id') ?></th>
            <td><?= $this->Number->format($prescrico->precricao_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($prescrico->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Prescricao') ?></th>
            <td><?= h($prescrico->dt_prescricao) ?></td>
        </tr>
    </table>
</div>
