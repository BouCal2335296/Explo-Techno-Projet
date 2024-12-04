<div class="div-arrondi">
    <h2>Connexion</h2>
    <form action="action.php" method=post>
        <label for=Courriel>Adresse Mail :</label>
        <input type=email name=Courriel class=text_zone required>
        <label for=Password>Mot de passe :</label>
        <input type=password name=PassWord class=text_zone minlength=8 required>
        <input id=SubmitConnexion type=submit value=Envoyer>
    </form>
</div>

<?php
/*public function login()
{
    // Enregistrer une variable de session
    $this->request->getSession()->write('Utilisateur.nom', 'Jean Dupont');
    
    // Lire la variable de session
    $nom = $this->request->getSession()->read('Utilisateur.nom');
    echo $nom; // "Jean Dupont"

    // Vérifier si la variable de session existe
    if ($this->request->getSession()->check('Utilisateur.nom')) {
        // La variable est définie
    }

    // Supprimer la variable de session
    $this->request->getSession()->delete('Utilisateur.nom');
}
*/
?>