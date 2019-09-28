<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medico $medico
 */
?>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Médicos') ?></li>
        <li><?= $this->Html->link(__('add'), ['action' => 'add'], array('class' => 'large material-icons')) ?> </li>
        <li><?= $this->Html->link(__('list'), ['action' => 'index'], array('class' => 'large material-icons')) ?></li>
        <li><?= $this->Form->postLink(
                __('delete'),
                ['action' => 'delete', $medico->medico_id],
                ['confirm' => __('Você tem certeza que deseja deletar o médico: {0}?', $medico->user->nome_completo), 'class' => 'large material-icons']
            ) ?>
        </li>
    </ul>
</nav>
<div class="medicos form large-9 medium-8 columns content">
    <?= $this->Form->create($medico) ?>
    <fieldset>
        <legend><?= __('Editar Médico') ?></legend>
        <?php
        echo $this->Form->input('crm', array('label' => 'CRM'));
        echo $this->Form->input('especialidade');
        echo $this->Form->input('usuario_id', array('label' => 'Nome Completo', 'required' => 'true', 'options' => $users));
        ?>
    </fieldset>
    <?= $this->Form->button(__('<i class="large material-icons">save</i>')) ?>
    <?= $this->Form->end() ?>
</div>