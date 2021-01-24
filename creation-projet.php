<?php include "header-agent.php"; ?>
<form action="projet.php">
    <h2>Créer un nouveau projet</h2>
    <div class="form-group">
        <div class="form-parent">
            <div class="form-1">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Entrer un Nom">
                </div>
                <label for="">Type</label>
                <select name="Types" id="Projets-select">
                    <option value="">--------------</option>
                    <option value="Type1">Type 1</option>
                    <option value="Type2">Type 2</option>
                    <option value="Type3">Type 3</option>
                </select>
            </div>
            <div class="form-2">
                <div class="form-group">
                    <label for="">Client</label>
                    <select name="Clients" id="Client-select">
                        <option value="">--------------</option>
                        <option value="Client1">Client 1</option>
                        <option value="Client2">Client 2</option>
                        <option value="Client3">Client 3</option>
                        <option value="Client4">Client 4</option>
                    </select>
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
        <button type="submit" class="btn btn-primary" onclick="window.location.href='projet.php'">Créer</button>
    </div>
</form>
</div>
</body>
</html>

