<!--Menu lateral-->
<nav class="large-3 medium-4 columns" id="actions-sidebar" style="background-color:#ADD8E6;">
    <br>
    <a href="#" data-activates="slide-out" class="waves-effect waves-light btn-large button-collapse">MENU<i class="material-icons">menu</i></a>
    <ul id="slide-out" class="side-nav" style="list-style-type: none;">
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion" style="list-style-type: none;">
                <li>
                    <a class="collapsible-header"><i class="fas fa-user fa-lg"></i><?= __(' Usuários') ?></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'add']); ?>"><i class="large material-icons">add</i> <span>Adicionar</span></a>
                            </li>
                            <li><?= $this->Html->link(__('listar'), ['controller' => 'Users', 'action' => 'index'], array('class' => '')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><i class="fa fa-user-md fa-lg"></i><?= __(' Médicos') ?></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Medicos', 'action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Medicos', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><i class="fas fa-user-injured fa-lg"></i><?= __(' Pacientes') ?></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Pacientes', 'action' => 'add'], array('class' => 'large material-icons')) ?></li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Pacientes', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><i class="fas fa-pills fa-lg"></i><?= __(' Medicamentos') ?></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Medicamentos', 'action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Medicamentos', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><i class="fas fa-file-medical-alt fa-lg"></i><?= __(' Prescrições') ?></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Prescricoes', 'action' => 'add'], array('class' => 'large material-icons')) ?></li>
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