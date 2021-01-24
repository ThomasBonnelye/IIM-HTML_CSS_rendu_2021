<?php include "header-agent.php"; ?>
    <div class="row">
        <div class="col-sm-8">
            <div class="contenu">
                <div class="contenu-auteur">
                    <img src="http://placekitten.com/100/100" alt="">
                    <p>Auteur</p>
                </div>
                <div class="contenu-texte">
                    <p>
                        Maecenas porta a elit vitae bibendum. Nullam posuere, justo in lacinia facilisis, mi nibh facilisis ex, at tincidunt libero urna at nulla. Praesent mauris felis, feugiat at augue a, finibus posuere nibh. Phasellus lectus purus, congue eget dolor ac, tempus ultricies sapien. Praesent rutrum, augue eget porttitor fringilla, odio arcu varius nisl, id semper magna ex eu turpis. Morbi volutpat pellentesque justo vitae egestas. Sed nec est ex.
                    </p>
                </div>
            </div>
            <div class="contenu">
                <div class="contenu-auteur">
                    <img src="http://placekitten.com/100/100" alt="">
                    <p>Agent</p>
                </div>
                <div class="contenu-texte">
                    <p>
                        Maecenas porta a elit vitae bibendum. Nullam posuere, justo in lacinia facilisis, mi nibh facilisis ex, at tincidunt libero urna at nulla. Praesent mauris felis, feugiat at augue a, finibus posuere nibh. Phasellus lectus purus, congue eget dolor ac, tempus ultricies sapien. Praesent rutrum, augue eget porttitor fringilla, odio arcu varius nisl, id semper magna ex eu turpis. Morbi volutpat pellentesque justo vitae egestas. Sed nec est ex.
                    </p>
                </div>
            </div>
            <div class="message">
                <label for="">Message</label>
                <textarea type="text" class="form-control" id="" aria-describedby="" placeholder="Entrer un Message"></textarea>
            </div>
            <div class="buttons">
                <button type="button" class="btn btn-danger" onclick="window.location.href='tickets-agent.php'">Fermer le ticket</button>
                <button type="button" class="btn btn-primary"onclick="window.location.href='tickets-agent.php'">Envoyer</button>
            </div>
        </div>
        <div class="col-sm-2 col-contenu">
            <div>
                <h2>Détails du ticket</h2>
            </div>
            <div>
                <label for="projet-select">Statut</label>
                <select name="Clients" id="Statut-select">
                    <option value="">--------------</option>
                    <option value="Statut1">Nouveau</option>
                    <option value="Statut2">En cours</option>
                    <option value="Statut3">Fermé</option>
                </select>
                <label for="projet-select">Projets</label>
                <select name="projets" id="projet-select">
                    <option value="">--------------</option>
                    <option value="projet1">Projet 1</option>
                    <option value="projet2">Projet 2</option>
                    <option value="projet3">Projet 3</option>
                    <option value="projet4">Projet 4</option>
                </select>
                <button type="button" class="btn btn-primary">Mettre à jour</button>
            </div>
        </div>
    </div>
    </div>
    </body>
    </html>
