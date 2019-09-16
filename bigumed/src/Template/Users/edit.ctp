<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Usuários') ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar Usuário'),
                ['action' => 'delete', $user->usuario_id],
                ['confirm' => __('Você tem certeza que deseja deletar o usuário: {0}?', $user->nome_completo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar Usuário') ?></legend>
        <?php
             echo $this->Form->input('cpf', array('label'=>'CPF','disabled'=>'true'));
             echo $this->Form->input('nome_completo');
             echo $this->Form->input('sexo', array('label'=>'Selecione o sexo', 'type'=>'select', 'options'=>array('M'=>'Masculino','F'=>'Feminino')));
             echo $this->Form->input('roles_id', array('label'=>'Papel', 'type'=>'select', 'options' => $roles));
             echo $this->Form->input('status', array('label'=>"Ativo", 'type'=>'checkbox'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('<i class="large material-icons">save</i>')) ?>
    <?= $this->Form->end() ?>
</div>
