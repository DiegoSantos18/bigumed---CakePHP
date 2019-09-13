<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente $paciente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $paciente->paciente_id],
                ['confirm' => __('Você tem certeza que quer deletar o paciente: {0}?', $paciente->paciente_id)]
            )
        ?></li>
<<<<<<< HEAD
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prescricoes'), ['controller' => 'Prescricoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prescrico'), ['controller' => 'Prescricoes', 'action' => 'add']) ?></li>
=======
        <li><?= $this->Html->link(__('Listar Pacientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Users', 'action' => 'add']) ?></li>
>>>>>>> 9bb016e749d35e1d670ba7e540bf9b28e131524d
    </ul>
</nav>
<div class="pacientes form large-9 medium-8 columns content">
    <?= $this->Form->create($paciente) ?>
    <fieldset>
        <legend><?= __('Editar Paciente') ?></legend>
        <?php
            echo $this->Form->control('rg');
            echo $this->Form->control('numero_convenio');
            echo $this->Form->control('usuario_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
