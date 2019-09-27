<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medicamento $medicamento
 */
?>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Medicamentos') ?></li>
        <li><?= $this->Html->link(__('list'), ['action' => 'index'], array('class' => 'large material-icons')) ?></li>
    </ul>
</nav>
<div class="medicamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($medicamento) ?>
    <fieldset>
        <legend><?= __('Novo Medicamento') ?></legend>
        <?php
        echo $this->Form->input('nome_popular', array('label' => 'Nome Popular'));
        echo $this->Form->input('nome_tecnico', array('label' => 'Nome Técnico'));
        echo $this->Form->input('tipo', array('label' => 'Tipo'));
        echo $this->Form->input('composicao', array('label' => 'Composição'));
        echo $this->Form->input('interacoes', array('label' => 'Interações'));
        echo $this->Form->input('contra_indicacoes', array('label' => 'Contra Indicações'));
        echo $this->Form->input('indicacao', array('label' => 'Indicação'));
        echo $this->Form->input('posologia', array('label' => 'Posologia'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('<i class="large material-icons">save</i>')) ?>
    <?= $this->Form->end() ?>
</div>