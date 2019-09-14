<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medico[]|\Cake\Collection\CollectionInterface $medicos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Médicos') ?></li>
        <li><?= $this->Html->link(__('Novo Médico'), ['action' => 'add']) ?></li>
        <li class="heading"><?= __('Usuários') ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li class="heading"><?= __('Prescrições') ?></li>
        <li><?= $this->Html->link(__('Listar Prescrições'), ['controller' => 'Prescricoes', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="medicos index large-9 medium-8 columns content">
    <h3><?= __('Medicos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('medico_id', array('label'=>'Médico')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('crm', array('label'=>'CRM')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('especialidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_completo', array('label'=>'Usuário')) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medicos as $medico): ?>
            <tr>
                <td><?= $this->Number->format($medico->medico_id) ?></td>
                <td><?= h($medico->crm) ?></td>
                <td><?= h($medico->especialidade) ?></td>
                <td><?= $medico->has('user') ? $this->Html->link($medico->user->nome_completo, ['controller' => 'Users', 'action' => 'view', $medico->user->usuario_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $medico->medico_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $medico->medico_id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $medico->medico_id], ['confirm' => __('Você tem certeza que deseja deletar o médico: {0}?', $medico->user->nome_completo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')]) ?></p>
    </div>
</div>
