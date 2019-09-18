<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>





<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Usuários') ?></li>
        <li><?= $this->Html->link(__('add'), ['action' => 'add'], array('class' => 'large material-icons')) ?></li>
        <li class="heading"><?= __('Médicos') ?></li>
        <li><?= $this->Html->link(__('list'), ['controller' => 'Medicos', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Usuários') ?></h3>
    <!-- Pesquisa
    <?= $this->Form->create("",['type'=>'get']) ?>
        <?= $this->Form->control('keyword',['default'=>$this->request->query('keyword')]); ?>
        <button>Pesquisa</button>
    <?= $this->Form->end() ?>
    -->
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cpf', array('label'=>'CPF')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_completo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('roles_id', array('label'=>'Papel')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_modificacao', array('label'=>'Ultima Modificação')) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->cpf) ?></td>
                <td><?= h($user->nome_completo) ?></td>
                <td><?= h($user->sexo) ?></td>
                <td><?= h($user->role->role) ?></td>
                <td><?= h($user->status ? __('Ativo') : __('Inativo')) ?></td>
                <td><?= h($user->dt_modificacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link('visibility',['action' => 'view', $user->usuario_id], array('class' => 'large material-icons')) ?>
                    <?= $this->Html->link('edit',['action' => 'edit', $user->usuario_id], array('class' => 'large material-icons')) ?>
                    <?= $this->Form->postLink(__('delete'), ['action' => 'delete', $user->usuario_id],array('class' => 'large material-icons') ,['confirm' => __('Você tem certeza que você deseja deletar o usuário: {0}?', $user->nome_completo)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de total de {{count}}')]) ?></p>
    </div>
</div>
