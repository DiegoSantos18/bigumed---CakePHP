<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente[]|\Cake\Collection\CollectionInterface $pacientes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
<<<<<<< HEAD
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prescricoes'), ['controller' => 'Prescricoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prescrico'), ['controller' => 'Prescricoes', 'action' => 'add']) ?></li>
=======
        <li><?= $this->Html->link(__('Novo Paciente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Users', 'action' => 'add']) ?></li>
>>>>>>> 9bb016e749d35e1d670ba7e540bf9b28e131524d
    </ul>
</nav>
<div class="pacientes index large-9 medium-8 columns content">
    <h3><?= __('Pacientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('paciente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_convenio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $paciente): ?>
            <tr>
                <td><?= $this->Number->format($paciente->paciente_id) ?></td>
                <td><?= h($paciente->rg) ?></td>
                <td><?= h($paciente->numero_convenio) ?></td>
                <td><?= $paciente->has('user') ? $this->Html->link($paciente->user->nome_completo, ['controller' => 'Users', 'action' => 'view', $paciente->user->usuario_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $paciente->paciente_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $paciente->paciente_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paciente->paciente_id], ['confirm' => __('Você tem certeza que quer deletar o paciente: {0}?', $paciente->paciente_id)]) ?>
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
