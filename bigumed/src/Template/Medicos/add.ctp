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
        <li><?= $this->Html->link(__('list'), ['action' => 'index'], array('class' => 'large material-icons')) ?></li>
    </ul>
</nav>
<div class="medicos form large-9 medium-8 columns content">
    <?= $this->Form->create($medico) ?>
    <fieldset>
        <legend><?= __('Novo Médico') ?></legend>
        <?php
            //echo $this->Form->input('cpf', array('label'=>'CPF','required'=>'true', 'options' => $users));
            echo $this->Form->input('crm', array('label'=>'CRM'));
            echo $this->Form->input('usuario_id', array('label'=>'Nome Completo','required'=>'true', 'options' => $users));
            echo $this->Form->input('especialidade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('<i class="large material-icons">save</i>')) ?>
    <?= $this->Form->end() ?>
</div>
