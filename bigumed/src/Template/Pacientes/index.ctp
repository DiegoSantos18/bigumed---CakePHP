<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente[]|\Cake\Collection\CollectionInterface $pacientes
 */
?>
<!--Menu lateral-->
<nav class="large-3 medium-4 columns" id="actions-sidebar" style="background-color:#ADD8E6;">
    <br>
    <a href="#" data-activates="slide-out" class="waves-effect waves-light btn-large button-collapse">MENU<i class="material-icons">menu</i></a>
    <ul id="slide-out" class="side-nav" style="list-style-type: none;">
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion" style="list-style-type: none;">
                <li>
                    <a class="collapsible-header"><?= __('Usuários ') ?><i class="fas fa-user fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Users', 'action' => 'add'], array('class' => 'large material-icons')) ?></li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Users', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Médicos ') ?><i class="fa fa-user-md fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Medicos', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Pacientes ') ?><i class="fas fa-user-injured fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Pacientes', 'action' => 'add'], array('class' => 'large material-icons')) ?></li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Pacientes', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Medicamentos ') ?><i class="fas fa-pills fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Medicamentos', 'action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Medicamentos', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Prescrições ') ?><i class="fas fa-file-medical-alt fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Prescricoes', 'action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Prescricoes', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <script>
        //script abre e fecha menu
        $(".button-collapse").sideNav();
    </script>
</nav>
<!--Fim Menu lateral-->

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
                <th scope="col"><?= $this->Paginator->sort('cpf', array('name'=>'cpf')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg', array('name'=>'rg')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_convenio', array('name'=>'numero_convenio')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_completo', array('name'=>'nome_completo')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_nascimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_gravida', array('name' => 'status_gravida')) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
<<<<<<< HEAD
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
=======
            <?php foreach ($pacientes as $paciente) : ?>
                <tr>
                    <td><?= h($paciente->rg) ?></td>
                    <td><?= h($paciente->numero_convenio) ?></td>
                    <td><?= $paciente->has('user') ? $this->Html->link($paciente->user->nome_completo, ['controller' => 'Users', 'action' => 'view', $paciente->user->usuario_id]) : '' ?></td>
                    <td><?= h($paciente->data_nascimento) ?></td>
                    <td><?= h($paciente->status_gravida ? __('Gestante') : __('Não Gestante')) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('visibility', ['action' => 'view',  $paciente->paciente_id], array('class' => 'large material-icons')) ?>
                        <?= $this->Html->link('edit', ['action' => 'edit', $paciente->paciente_id], array('class' => 'large material-icons')) ?>
                        <?= $this->Form->postLink(
                                __('delete'),
                                ['action' => 'delete', $paciente->paciente_id],
                                ['confirm' => __('Você tem certeza que você deseja deletar o paciente: {0}?', $paciente->nome_completo), 'class' => 'large material-icons']
                            ) ?>
                    </td>
                </tr>
>>>>>>> 0365b7dca20e053932926365e8fbbcf437250ddb
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