<?php include "header-deco.php"; ?>
<form action="tickets-client.php">
    <h2>Inscription</h2>
    <div class="form-group">
        <label for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer un nom">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Prénom</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer un prénom">
    </div>
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
    <button type="submit" class="btn btn-primary" onclick="window.location.href='tickets-client.php'">S'inscire</button>
</form>
</div>
</body>
</html>
