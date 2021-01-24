<?php include "header-deco.php"; ?>
<form action="tickets-agent.php">
    <h2>Connexion</h2>
    <div class="form-group">
        <label for="exampleInputEmail1">Adresse mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer un email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer un mot de passe">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Je ne suis pas un robot</label>
    </div>
    <button type="submit" class="btn btn-primary" onclick="window.location.href='tickets-agent.php'">Se connecter</button>
</form>
<div class="mx-auto" style="width: 400px;">
    <p>Pas encore de compte ?<a href="inscription.php"> S'inscrire</a></p>
</div>
</div>
</body>
</html>
