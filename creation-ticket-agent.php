<?php include "header-agent.php"; ?>
<form action="tickets-agent.php">
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
        <div class="form-group">
            <label for="">Agent</label>
            <select name="agents" id="Agent-select">
                <option value="">--------------</option>
                <option value="agent1">Agent 1</option>
                <option value="agent2">Agent 2</option>
                <option value="agent3">Agent 3</option>
            </select>
        </div>
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
    <button type="submit" class="btn btn-primary" onclick="window.location.href='tickets-agent.php'">Créer</button>
    </div>
</form>
</div>
</body>
</html>
