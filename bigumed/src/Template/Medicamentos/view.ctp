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
        <li><?= $this->Html->link(__('add'), ['action' => 'add'], array('class' => 'large material-icons')) ?> </li>
        <li><?= $this->Html->link(__('list'), ['action' => 'index'], array('class' => 'large material-icons')) ?> </li>
        <li><?= $this->Html->link(__('edit'), ['action' => 'edit', $medicamento->medicamentos_id], array('class' => 'large material-icons')) ?> </li>
        <li><?= $this->Form->postLink(
                __('delete'),
                ['action' => 'delete', $medicamento->medicamentos_id],
                ['confirm' => __('Você tem certeza que deseja deletar o medicamento: {0}?', $medicamento->nome_popular), 'class' => 'large material-icons']
            ) ?>
        </li>
    </ul>
</nav>
<div class="medicamentos view large-9 medium-8 columns content">
    <h3><?= h($medicamento->nome_popular) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Popular') ?></th>
            <td><?= h($medicamento->nome_popular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Técnico') ?></th>
            <td><?= h($medicamento->nome_tecnico) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Tipo') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->tipo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Composição') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->composicao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Interações') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->interacoes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Contra Indicações') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->contra_indicacoes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Indicação') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->indicacao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Posologia') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->posologia)); ?>
    </div>
</div>