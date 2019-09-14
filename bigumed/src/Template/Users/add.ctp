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
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Novo Usuário') ?></legend>
        <?php
            echo $this->Form->input('cpf', array('label'=>'CPF'));
            echo $this->Form->input('senha', array('type'=>'password'));
            echo $this->Form->input('nome_completo');
            echo $this->Form->input('sexo', array('label'=>'Selecione o sexo', 'type'=>'select', 'options'=>array('M'=>'Masculino','F'=>'Feminino')));
            echo $this->Form->input('roles_id', array('label'=>'Papel', 'type'=>'select', 'options'=>$roles));
            echo $this->Form->input('status', array('label'=>"Ativo", 'type'=>'checkbox', 'checked'=>'true'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Adicionar')) ?>
    <?= $this->Form->end() ?>
</div>
