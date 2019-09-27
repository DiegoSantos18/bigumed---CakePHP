<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="materialContainer">
    <div class="box">
        <?= $this->Form->create() ?>
            <form>
                <fieldset>
                    <legend><?= __('Login',['class'=>'title']) ?></legend>
                    <img id="imgLogoMenu"/>
                    <?php
                        echo "<div class='input'>"; 
                        echo $this->Form->control('cpf',['id'=>'username' ,'type'=>'text', 'clas'=>'validate','autofocus'=>'true']);
                        echo "</div>";
                        echo "<div class='input'>";
                        echo $this->Form->control('senha',['id'=>'password', 'type'=>'password', 'class'=>'validate']);
                        echo "</div>";
                        echo "<br><br>";
                    ?>
                    <ul class="side-nav input">
                        <li><a href='#!'>Esqueceu a senha?</a></li>
                    </ul>
                </fieldset>
                <div>
                    <?= $this->Form->button(__('Logar',['class'=>'btn right', 'type'=>'submit', 'value'=>'Logar'])) ?>
                </div>
            </form>
        <?= $this->Form->end() ?>
   </div>


   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>
        <?= $this->Form->create() ?>
                <form>
                    <fieldset>
                        <legend><?= __('Login ADMIN',['class'=>'title']) ?></legend>
                        <img src="img\bigumedLogoMenu.png">
                        <?php
                            echo "<div class='input'>"; 
                            echo $this->Form->control('cpf',['id'=>'username' ,'type'=>'text', 'clas'=>'validate','autofocus'=>'true']);
                            echo "</div>";
                            echo "<div class='input'>";
                            echo $this->Form->control('senha',['id'=>'password', 'type'=>'password', 'class'=>'validate']);
                            echo "</div>";
                            echo "<a href='#!'>Esqueceu a senha?</a>";
                            echo "<br><br>";
                        ?>
                        <ul class="side-nav">
                            <li><?= $this->Html->link(__('Cadastre-se'), ['controller' => 'Users','action' => 'add','class'=>'btn']) ?></li>
                        </ul>
                    </fieldset>
                    <div>
                        <?= $this->Form->button(__('Logar',['class'=>'btn right', 'type'=>'submit', 'value'=>'Logar'])) ?>
                    </div>
            </form>
        <?= $this->Form->end() ?>
    </div>
</div>
