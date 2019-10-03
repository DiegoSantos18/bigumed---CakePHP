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
                <legend style="text-align: center"><?= __('LOGIN', ['class' => 'title']) ?></legend>
                
                <div style="width: 100%; text-align: center;">
                    <img id="imgLogoMenu" />
                </div>
                <?php
                echo $this->Form->control('cpf', ['id' => 'username', 'type' => 'text', 'class' => 'validate', 'autofocus' => 'true']);
                echo $this->Form->control('senha', ['id' => 'password', 'type' => 'password', 'class' => 'validate']);
                ?>
            </fieldset>
            <div style="text-align: center; margin-bottom: 30px;">
                <?= $this->Form->button(__('Logar'), ['class' => 'btn waves-effect waves-light btn-large red darken-4', 'type' => 'submit', 'value' => 'Logar']); ?>
            </div>
            <div style="width: 100%; text-align: center;">
                <a style="text-decoration: underline; color: gray;" href='#!'>Esqueceu a senha?</a>
            </div>
        </form>
        <?= $this->Form->end() ?>
    </div>
</div>