<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente[]|\Cake\Collection\CollectionInterface $pacientes
 */

echo $this->element('sidebar');

?>


<!-- Container Principal Conteúdo-->
<div class="pacientes index large-9 medium-8 columns content">
    <h3><?= __('Pacientes') ?></h3>
    <!-- Tabela com Dados-->
    <table cellpadding="0" cellspacing="0" style="opacity: 0.97;background: transparent;">
        <tbody>
            <!--Form filtro-->
            <tr>
                <?= $this->Form->create() ?>
                <td><?= $this->Form->input('cpf', array('label'=>'','name'=>'cpf')) ?></td>
                <td><?= $this->Form->input('rg', array('label'=>'','name'=>'rg')) ?></td>
                <td><?= $this->Form->input('numero_convenio', array('label'=>'','name'=>'numero_convenio')) ?></td>
                <td><?= $this->Form->input('nome_completo', array('label'=>'','name'=>'nome_completo')) ?></td>
                <td>-</td>
                <td><?= $this->Form->input('status_gravida', array('label' => '', 'name' => 'status_gravida', 'type' => 'select', 'options' => array('1' => 'Gestante', '0' => 'Não Gestante'))) ?></td>
                <td class="actions">
                    <input type="submit" value="search" class="large material-icons filtro" />
                    <input type="reset" value="format_clear" class="large material-icons filtro" />
                </td>
                <?= $this->Form->end() ?>
            </tr>
            <!--Fim form filtro-->
        </tbody>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cpf', array('name'=>'CPF')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg', array('name'=>'RG')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_convenio', array('name'=>'Nº convênio')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_completo', array('name'=>'Nome completo')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_nascimento', array('name'=>'Data de nascimento')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_gravida', array('name' => 'Gestante')) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $paciente): ?>
            <tr>
                <td><?= h($paciente->user->cpf) ?></td>
                <td><?= h($paciente->rg) ?></td>
                <td><?= h($paciente->numero_convenio) ?></td>
                <td><?= $paciente->has('user') ? $this->Html->link($paciente->user->nome_completo, ['controller' => 'Users', 'action' => 'view', $paciente->user->usuario_id]) : '' ?></td>
                <td><?= h($paciente->data_nascimento) ?></td>
                <td><?= h($paciente->status_gravida ? __('Gestante') : __('Não Gestante')) ?></td>
                <td class="actions">
                    <?= $this->Html->link('visibility',['action' => 'view',  $paciente->paciente_id], array('class' => 'large material-icons')) ?>
                    <?= $this->Html->link('edit',['action' => 'edit', $paciente->paciente_id], array('class' => 'large material-icons')) ?>
                    <?= $this->Form->postLink(__('delete'), ['action' => 'delete', $paciente->paciente_id],array('class' => 'large material-icons') ,['confirm' => __('Você tem certeza que você deseja deletar o paciente: {0}?', $paciente->nome_completo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Paginação tela-->
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de total de {{count}}')]) ?></p>
    </div>
    <!-- Fim Paginação tela-->
</div>
<!-- Fim Container Principal Conteúdo-->