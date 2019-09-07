<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Usuários') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_completo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('roles_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_criacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_modificacao') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->usuario_id) ?></td>
                <td><?= h($user->cpf) ?></td>
                <td><?= h($user->nome_completo) ?></td>
                <td><?= h($user->sexo) ?></td>
                <td><?= $user->has('role') ? $this->Html->link($user->role->role == 'MED' ? 'Médico' : 'Paciente', ['controller' => 'Roles', 'action' => 'view', $user->role->roles_id]) : '' ?></td>
                <td><?= h($user->status ? __('Ativo') : __('Inativo')) ?></td>
                <td><?= h($user->dt_criacao) ?></td>
                <td><?= h($user->dt_modificacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $user->usuario_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->usuario_id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->usuario_id], ['confirm' => __('Você tem certeza que quer deletar usuário: {0}?', $user->nome_completo)]) ?>
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
