<?php include "header-client.php"; ?>
<form action="tickets-client.php">
    <h2>Créer un nouveau ticket</h2>
    <div class="form-group">
        <div class="form-parent">
            <div class="form-1">
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Entrer un Titre">
                </div>
                <label for="">Statut</label>
                <select name="Clients" id="Statut-select">
                    <option value="">--------------</option>
                    <option value="Statut1">Nouveau</option>
                    <option value="Statut2">En cours</option>
                    <option value="Statut3">Fermé</option>
                </select>
            </div>
            <div class="form-2">
                <div class="form-group">
                    <label for="">Auteur</label>
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Entrer un Auteur">
                </div>
                <div class="form-group">
                    <label for="">Priorité</label>
                    <select name="prioritées" id="Priorité-select">
                        <option value="">--------------</option>
                        <option value="prioritée1">Faible</option>
                        <option value="prioritée2">Élevée</option>
                        <option value="prioritée3">Urgent</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea type="text" class="form-control" id="" aria-describedby="" placeholder="Entrer une description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" onclick="window.location.href='tickets-client.php'">Créer</button>
    </div>
</form>
</div>
</body>
</html>

