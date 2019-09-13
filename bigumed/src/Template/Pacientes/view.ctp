<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente $paciente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paciente'), ['action' => 'edit', $paciente->paciente_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paciente'), ['action' => 'delete', $paciente->paciente_id], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->paciente_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prescricoes'), ['controller' => 'Prescricoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prescrico'), ['controller' => 'Prescricoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientes view large-9 medium-8 columns content">
    <h3><?= h($paciente->paciente_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($paciente->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Convenio') ?></th>
            <td><?= h($paciente->numero_convenio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $paciente->has('user') ? $this->Html->link($paciente->user->usuario_id, ['controller' => 'Users', 'action' => 'view', $paciente->user->usuario_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paciente Id') ?></th>
            <td><?= $this->Number->format($paciente->paciente_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Prescricoes') ?></h4>
        <?php if (!empty($paciente->prescricoes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Precricao Id') ?></th>
                <th scope="col"><?= __('Periodicidade') ?></th>
                <th scope="col"><?= __('Quantidade') ?></th>
                <th scope="col"><?= __('Duracao') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Dt Prescricao') ?></th>
                <th scope="col"><?= __('Medico Id') ?></th>
                <th scope="col"><?= __('Paciente Id') ?></th>
                <th scope="col"><?= __('Medicamentos Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paciente->prescricoes as $prescricoes): ?>
            <tr>
                <td><?= h($prescricoes->precricao_id) ?></td>
                <td><?= h($prescricoes->periodicidade) ?></td>
                <td><?= h($prescricoes->quantidade) ?></td>
                <td><?= h($prescricoes->duracao) ?></td>
                <td><?= h($prescricoes->observacao) ?></td>
                <td><?= h($prescricoes->dt_prescricao) ?></td>
                <td><?= h($prescricoes->medico_id) ?></td>
                <td><?= h($prescricoes->paciente_id) ?></td>
                <td><?= h($prescricoes->medicamentos_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Prescricoes', 'action' => 'view', $prescricoes->precricao_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Prescricoes', 'action' => 'edit', $prescricoes->precricao_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Prescricoes', 'action' => 'delete', $prescricoes->precricao_id], ['confirm' => __('Are you sure you want to delete # {0}?', $prescricoes->precricao_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
