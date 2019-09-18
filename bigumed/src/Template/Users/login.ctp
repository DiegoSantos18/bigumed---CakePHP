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
  <link type="text/css" rel="stylesheet" href="css/login.css"  media="screen,projection"/>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext" rel="stylesheet" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="background-image:url('img/fundoLogin.gif');background-repeat: no-repeat;background-size: cover; width: 100%;
    height: 100%;">
    
          
<div class="materialContainer">
    <div class="box">
        <?= $this->Form->create() ?>
            <form>
                <fieldset>
                    <legend><?= __('Login',['class'=>'title']) ?></legend>
                    <img src="img/bigumedLogoMenu.png">
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



<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>


</body>

             
          
            
                
                
              
            

      