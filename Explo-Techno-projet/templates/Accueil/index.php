<?php
?>


<?php echo'Alan Vestis --- Bourdet Calvin'?><br>
<?php echo'420KTAJQ-Explo-Techno-Gr20'?><br>
<button><?= $this->Html->link(
    'Lancer le moteur',
    ['controller' => 'Orientationmoteur', 'action' => 'lancerMoteur'],
    ['class' => 'btn btn-primary']
) ?></button>
<img src='webroot/img/Capture.png' style=width:300px>