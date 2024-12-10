<div class="explo-techno-page">
    <div class="explo-techno-container">
        <h1 class="explo-techno-title">420KTAJQ - Explo-Techno - Gr20</h1>
        <p class="explo-techno-text">Alan Vestis --- Bourdet Calvin</p>
        <img src="webroot/img/cake-php.png" alt="Capture d'écran" class="explo-techno-image">
        <div class="explo-techno-footer">
            &copy; 2024 Projet d'Exploration Technologique
        </div>
        <button><?= $this->Html->link(
        'Lancer le moteur',
        ['controller' => 'Accueil', 'action' => 'lancerMoteur'],
        ['class' => 'btn btn-primary']
        ) ?></button>
    </div>
</div>