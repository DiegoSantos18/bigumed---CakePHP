<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
<<<<<<< HEAD
        <li class="heading"><?= __('Funções do Admin') ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Níveis Usuário'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Nível Usuário'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
=======
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
>>>>>>> 9bb016e749d35e1d670ba7e540bf9b28e131524d
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
<<<<<<< HEAD
        <legend><?= __('Novo Usuário') ?></legend>
=======
        <legend><?= __('Adicionar Usuário') ?></legend>
>>>>>>> 9bb016e749d35e1d670ba7e540bf9b28e131524d
        <?php
            echo $this->Form->control('cpf');
            echo $this->Form->control('senha');
            echo $this->Form->control('nome_completo');
            echo $this->Form->control('sexo', ['type' => 'radio', 'options' => [['value' => 'M', 'text' => __('Masculino')],['value' => 'F', 'text' => __('Feminino')]]]);
            echo $this->Form->control('roles_id', ['options' => $roles]);
<<<<<<< HEAD
            echo $this->Form->label('[v] para usuário ativo ou [ ] para não ativo');
            echo "<br>";
            echo $this->Form->control('status', ['checked' => 'true']);
            echo $this->Form->control('dt_criacao');
            echo $this->Form->control('dt_modificacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
=======
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Adicionar')) ?>
>>>>>>> 9bb016e749d35e1d670ba7e540bf9b28e131524d
    <?= $this->Form->end() ?>
</div>
