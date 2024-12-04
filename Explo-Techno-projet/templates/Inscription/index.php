<div class="div-arrondi">
    <h2>Inscription</h2>
    <form action="">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" required>
        <label for="email">Adresse Mail :</label>
        <input type="email" name="email" required>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" minlength=8 required>
        <label for="role">Rôle:</label>
        <select name="role">
            <option value="visiteur">Visiteur</option>
            <option value="utilisateur">Utilisateur</option>
        </select>
        <input id=SubmitConnexion type=submit value=Envoyer>
    </form>
</div>