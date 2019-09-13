<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="background-image:url('img/fundoLogin.png');background-repeat: no-repeat;background-size: cover; width: 100%;
    height: 100%;">
<main>
    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="card card-login" style="display: flex;">
                    <div class="card-login-splash">
                        <div class="wrapper">
                            <figure>
                                <img src="img/bigumedLogo.png" alt="Bigumed">
                            </figure>    
                        </div>
                        <div class="card-content">
                            <div class="users form large-9 medium-8 columns content">
                                <?= $this->Form->create() ?>
                                <form>
                                    <fieldset>
                                        <legend><?= __('Login') ?></legend>
                                        <?php
                                            echo "<div class='input-field'>"; 
                                            echo $this->Form->control('cpf',['id'=>'username' ,'type'=>'text', 'clas'=>'validate','autofocus'=>'true']);
                                            echo "</div>";
                                            echo "<div class='input-field'>";
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
                </div>
            </div>
        </div>
    </div>
</main>
</body>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>


             
          
            
                
                
              
            

              
              

          