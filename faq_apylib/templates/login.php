<main>
        <section id="login">
            <?= $message ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" name="email" id="inputEmail" placeholder="Email" required />
                </div>
                <div class="form-group">
                    <label for="inputPassword">Mot de passe</label>
                    <input type="password" name="password" id="inputPassword" placeholder="Mot de passe" required />
                </div>

                <input class="btn btn-secondary" type="submit" value="Ouvrir une session" />

                <a class="reset-password" href="./reset-password">Vous avez oublié votre mot de passe ?</a>
                <hr />
                <p>Vous ne possédez toujours pas de compte ?</p>
                <a class="btn btn-secondary" href="./create-account">Créer un compte</a>
            </form>

        </section>
    </main>