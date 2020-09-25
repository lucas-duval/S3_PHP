<?php
    include 'utils.inc.php';
    start_page('Test');
?>
    <form action="data-processing.php" method="post">
        <div>
            <label for="ident">
                Identifiant :
            </label>
            <input type="text" name="ident"/>
        </div>
        <div>
            <label for="civ">
                Civilité :
            </label>
            <input type="radio" name="civ"/>
        </div>
        <div>
            <label for="mail">
                E-mail :
            </label>
            <input type="text" name="mail"/>
        </div>
        <div>
            <label for="mdp">
                Mot de passe :
            </label>
            <input type="password" name="mdp"/>
        </div>
        <div>
            <label for="mdpv">
                Vérification du mot de passe :
            </label>
            <input type="password" name="mdpv"/>
        </div>
        <div>
            <label for="tel">
                Téléphone :
            </label>
            <input type="text" name="tel"/>
        </div>
        <div>
            <label for="pays">
                Pays :
            </label>
            <select name="pays">
                <option value="France">France</option>
                <option value="Allemagne">Allemagne</option>
                <option value="Espagne">Espagne</option>
                <option value="Italie">Italie</option>
            </select>
        </div>
        <div>
            <label for="cdtgnr">
                Conditions générales :
            </label>
            <input type="checkbox" name="cdtgnr"/>
        </div>
        <div>
            <label for="action">
                Soumettre :
            </label>
            <input type="submit" name="action" value="mailer"/>
        </div>
    </form>
<?php
    end_page();
?>
