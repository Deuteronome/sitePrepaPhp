<div id="popup">
        <div id="connectBox">
            <h3>Identifiez-vous</h3>
            <form method="post" action="../controller/login.php">
                
                <div class="formLine">
                    <label for="email">Adresse mail  -</label>
                    <input type="email" id="email" name="email" placeholder="votre adresse mail"/>
                </div>

                <div class="formLine">
                    <label for="password">Mot de passe  -</label>
                    <input type="password" id="password" name="password"/>
                </div>

                <div class="formLine">
                    <input type="submit" class="logBut" value="Se connecter"/>
                </div>
            </form>
        </div>
    </div>
<script src="../JS/logBox.js" defer></script>