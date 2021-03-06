<?php include "header-client.php"; ?>
<div class="row">
    <div class="col-sm-2">
        <div>
            <h2>Tous les tickets</h2>
        </div>
        <div>
            <p>Nouveaux</p>
            <p>En attente</p>
            <p>En cours</p>
            <p>Terminés</p>
        </div>
    </div>
    <div class="col-sm-7">
        <button type="button" class="btn btn-primary" onclick="window.location.href='creation-ticket-client.php'">Nouveau ticket</button>
        <div class="parent" onclick="window.location.href='ticket-contenu-client.php'">
            <div class="name">
                <img src="http://placekitten.com/100/100" alt="">
                <p>Nom du projet</p>
            </div>
            <div class="title-auteur">
                <p class="title">Titre du projet</p>
                <p class="auteur">Agent</p>
            </div>
            <div class="status-nouveau">
                <div><p>Nouveau</p></div>
            </div>
        </div>
        <div class="parent" onclick="window.location.href='ticket-contenu-client.php'">
            <div class="name">
                <img src="http://placekitten.com/100/100" alt="">
                <p>Nom du projet</p>
            </div>
            <div class="title-auteur">
                <p class="title">Titre du projet</p>
                <p class="auteur">Agent</p>
            </div>
            <div class="status-encours">
                <div><p>En cours</p></div>
            </div>
        </div>
        <div class="parent" onclick="window.location.href='ticket-contenu-client.php'">
            <div class="name">
                <img src="http://placekitten.com/100/100" alt="">
                <p>Nom du projet</p>
            </div>
            <div class="title-auteur">
                <p class="title">Titre du projet</p>
                <p class="auteur">Agent</p>
            </div>
            <div class="status-termine">
                <div><p>Terminé</p></div>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div>
            <h2>Filtres</h2>
        </div>
        <div>
            <label for="projet-select">Projets</label>
            <select name="projets" id="projet-select">
                <option value="">--------------</option>
                <option value="projet1">Projet 1</option>
                <option value="projet2">Projet 2</option>
                <option value="projet3">Projet 3</option>
                <option value="projet4">Projet 4</option>
            </select>
            <label for="Agent-select">Agent</label>
            <select name="Agent" id="Agent-select">
                <option value="">--------------</option>
                <option value="Agent1">Agent 1</option>
                <option value="Agent2">Agent 2</option>
                <option value="Agent3">Agent 3</option>
                <option value="Agent4">Agent 4</option>
            </select>
        </div>
    </div>
</div>
</div>
</body>
</html>

