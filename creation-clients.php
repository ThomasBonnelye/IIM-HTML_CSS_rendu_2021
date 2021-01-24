<?php include "header-agent.php"; ?>
<form action="clients.php">
    <h2>Créer un nouveau client</h2>
    <div class="form-group">
        <div class="form-parent">
            <div class="form-1">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Entrer un Nom">
                </div>
                <label for="">Projets</label>
                <select name="Clients" id="Projets-select">
                    <option value="">--------------</option>
                    <option value="Projets1">Projet 1</option>
                    <option value="Projets2">Projet 2</option>
                    <option value="Projets3">Projet 3</option>
                </select>
            </div>
            <div class="form-2">
                <div class="form-group">
                    <label for="">Prénom</label>
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Entrer un  Prénom">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Adresse mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer un email">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea type="text" class="form-control" id="" aria-describedby="" placeholder="Entrer une description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" onclick="window.location.href='clients.php'">Créer</button>
    </div>
</form>
</div>
</body>
</html>

