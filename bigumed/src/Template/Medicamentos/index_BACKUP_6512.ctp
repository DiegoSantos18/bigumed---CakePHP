<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medicamento[]|\Cake\Collection\CollectionInterface $medicamentos
 */
?>
<<<<<<< HEAD

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
=======
<!--Menu lateral-->
<nav class="large-3 medium-4 columns" id="actions-sidebar" style="background-color:#ADD8E6;">
>>>>>>> 37fabee591c34a34e48ac915c097cf1ac7eb0bbd
    <br>
    <a href="#" data-activates="slide-out" class="waves-effect waves-light btn-large button-collapse">MENU<i class="material-icons">menu</i></a>
    <ul id="slide-out" class="side-nav" style="list-style-type: none;">
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion" style="list-style-type: none;">
                <li>
<<<<<<< HEAD
                    <a class="collapsible-header"><?= __('Medicamentos ') ?><i class="fas fa-pills fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['action' => 'add'], array('class' => 'large material-icons')) ?></li>
=======
                    <a class="collapsible-header"><?= __('Usuários ') ?><i class="fas fa-user fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Users','action' => 'add'], array('class' => 'large material-icons')) ?></li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Users', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Médicos ') ?><i class="fa fa-user-md fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Medicos','action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Medicos', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Pacientes ') ?><i class="fas fa-user-injured fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                        <li><?= $this->Html->link(__('add'), ['controller' => 'Pacientes','action' => 'add'], array('class' => 'large material-icons')) ?></li>
                        <li><?= $this->Html->link(__('list'), ['controller' => 'Pacientes', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Medicamentos ') ?><i class="fas fa-pills fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Medicamentos','action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Medicamentos', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Prescrições ') ?><i class="fas fa-file-medical-alt fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Prescricoes','action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Prescricoes', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
>>>>>>> 37fabee591c34a34e48ac915c097cf1ac7eb0bbd
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <script>
<<<<<<< HEAD
        $(".button-collapse").sideNav();
    </script>
</nav>

<div class="medicamentos index large-9 medium-8 columns content">
=======
    //script abre e fecha menu
    $(".button-collapse").sideNav();
    </script>
</nav>
<!--Fim Menu lateral-->


<!-- Container Principal Conteúdo-->
<div class="medicamentos index large-9 medium-8 columns content homePage">
>>>>>>> 37fabee591c34a34e48ac915c097cf1ac7eb0bbd
    <h3><?= __('Medicamentos') ?></h3>
    <!-- Tabela com Dados-->
    <table cellpadding="0" cellspacing="0" style="opacity: 0.97;background: transparent;">
        <tbody>
            <!--Form filtro-->
            <tr>
                <?= $this->Form->create() ?>
                <td><?= $this->Form->input('nome_popular', array('label'=>'','name'=>'nome_popular')) ?></td>
                <td><?= $this->Form->input('nome_tecnico', array('label'=>'','name'=>'nome_tecnico')) ?></td>
                <td class="actions">
                    <input type="submit"  value="search" class="large material-icons filtro"/>
                    <input type="reset"  value="format_clear" class="large material-icons filtro"/>
                </td>
                <?= $this->Form->end() ?>
            </tr>
            <!--Fim form filtro-->
        </tbody>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nome_popular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_tecnico', array('label' => 'Nome Técnico')) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
<<<<<<< HEAD
            <?php foreach ($medicamentos as $medicamento) : ?>
                <tr>
                    <td><?= $this->Number->format($medicamento->medicamento_id) ?></td>
                    <td><?= h($medicamento->nome_popular) ?></td>
                    <td><?= h($medicamento->nome_tecnico) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('visibility', ['action' => 'view', $medicamento->medicamento_id], array('class' => 'large material-icons')) ?>
                        <?= $this->Html->link('edit', ['action' => 'edit', $medicamento->medicamento_id], array('class' => 'large material-icons')) ?>
                        <?= $this->Form->postLink(__('delete'), ['action' => 'delete', $medicamento->medicamento_id], ['confirm' => __('Você tem certeza que deseja deletar o medicamento: {0}?', $medicamento->nome_popular), 'class' => 'large material-icons']) ?>
                    </td>
                </tr>
=======
            <?php foreach ($medicamentos as $medicamento): ?>
            <tr>
                <td><?= h($medicamento->nome_popular) ?></td>
                <td><?= h($medicamento->nome_tecnico) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $medicamento->medicamento_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medicamento->medicamento_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medicamento->medicamento_id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicamento->medicamento_id)]) ?>
                </td>
            </tr>
>>>>>>> 37fabee591c34a34e48ac915c097cf1ac7eb0bbd
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
<<<<<<< HEAD
</div>
=======
    <!-- Fim Paginação tela-->
</div>
>>>>>>> 37fabee591c34a34e48ac915c097cf1ac7eb0bbd
