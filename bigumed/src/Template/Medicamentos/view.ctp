<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medicamento $medicamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Medicamento'), ['action' => 'edit', $medicamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medicamento'), ['action' => 'delete', $medicamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medicamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medicamento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="medicamentos view large-9 medium-8 columns content">
    <h3><?= h($medicamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nomepopular') ?></th>
            <td><?= h($medicamento->nomepopular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nometecnico') ?></th>
            <td><?= h($medicamento->nometecnico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($medicamento->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Tipo') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->tipo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Composicao') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->composicao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Contraindicacoes') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->contraindicacoes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Indicacao') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->indicacao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Posologia') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->posologia)); ?>
    </div>
</div>