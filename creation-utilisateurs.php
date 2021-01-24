<?php include "header-agent.php"; ?>
<form action="utilisateurs.php">
    <h2>Créer un nouveau ticket</h2>
    <div class="form-group">
        <div class="form-parent">
            <div class="form-1">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Entrer un Nom">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Adresse mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer un email">
                </div>
            </div>
            <div class="form-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Prénom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer un prénom">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer un mot de passe">
                </div>
        </div>
        <button type="submit" class="btn btn-primary" onclick="window.location.href='utilisateurs.php'">Créer</button>
    </div>
</form>
</div>
</body>
</html>

