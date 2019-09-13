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
        <li><?= $this->Html->link(__('List Prescricoes'), ['controller' => 'Prescricoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prescrico'), ['controller' => 'Prescricoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="medicamentos view large-9 medium-8 columns content">
    <h3><?= h($medicamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Popular') ?></th>
            <td><?= h($medicamento->nome_popular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Tecnico') ?></th>
            <td><?= h($medicamento->nome_tecnico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medicamentos Id') ?></th>
            <td><?= $this->Number->format($medicamento->medicamentos_id) ?></td>
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
        <h4><?= __('Contra Indicacoes') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->contra_indicacoes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Indicacao') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->indicacao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Posologia') ?></h4>
        <?= $this->Text->autoParagraph(h($medicamento->posologia)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Prescricoes') ?></h4>
        <?php if (!empty($medicamento->prescricoes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Precricao Id') ?></th>
                <th scope="col"><?= __('Periodicidade') ?></th>
                <th scope="col"><?= __('Quantidade') ?></th>
                <th scope="col"><?= __('Duracao') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Dt Prescricao') ?></th>
                <th scope="col"><?= __('Medico Id') ?></th>
                <th scope="col"><?= __('Paciente Id') ?></th>
                <th scope="col"><?= __('Medicamentos Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($medicamento->prescricoes as $prescricoes): ?>
            <tr>
                <td><?= h($prescricoes->precricao_id) ?></td>
                <td><?= h($prescricoes->periodicidade) ?></td>
                <td><?= h($prescricoes->quantidade) ?></td>
                <td><?= h($prescricoes->duracao) ?></td>
                <td><?= h($prescricoes->observacao) ?></td>
                <td><?= h($prescricoes->dt_prescricao) ?></td>
                <td><?= h($prescricoes->medico_id) ?></td>
                <td><?= h($prescricoes->paciente_id) ?></td>
                <td><?= h($prescricoes->medicamentos_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Prescricoes', 'action' => 'view', $prescricoes->precricao_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Prescricoes', 'action' => 'edit', $prescricoes->precricao_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Prescricoes', 'action' => 'delete', $prescricoes->precricao_id], ['confirm' => __('Are you sure you want to delete # {0}?', $prescricoes->precricao_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
