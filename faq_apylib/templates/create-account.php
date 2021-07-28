    <?php
    include('header.php');
    ?>

    <main>

        <section id="createAccount">
            <h2>Créer un compte</h2>
            <?= $message ?>
            <form action="" method="post">
                <div class="container">
                <div class="form-group">
                    <div class="form-item-group">
                        <label for="inputEmail">Email *</label>
                        <input type="email" name="email" id="inputEmail" value="<?= isset($data["email"]) ? $data["email"] : "" ?>" required />
                    </div>
                    <div class="form-item-group">
                        <label for="inputEmailConfirm">Confirmer email *</label>
                        <input type="email" name="emailConfirm" id="inputEmailConfirm" value="<?= isset($data["emailConfirm"]) ? $data["emailConfirm"] : "" ?>" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item-group">
                        <label for="inputPassword">Mot de passe *</label>
                        <input type="password" name="password" id="inputPassword" value="<?= isset($data["password"]) ? $data["password"] : "" ?>" required />
                    </div>
                    <div class="form-item-group">
                        <label for="inputPasswordConfirm">Confirmer le mot de passe *</label>
                        <input type="password" name="passwordConfirm" id="inputPasswordConfirm" value="<?= isset($data["passwordConfirm"]) ? $data["passwordConfirm"] : "" ?>" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item-group">
                        <label for="inputFirstname">Prénom *</label>
                        <input type="text" name="firstname" id="inputFirstname" value="<?= isset($data["firstname"]) ? $data["firstname"] : "" ?>" required />
                    </div>
                    <div class="form-item-group">
                        <label for="inputLastname">Nom *</label>
                        <input type="text" name="lastname" id="inputLastname" value="<?= isset($data["lastname"]) ? $data["lastname"] : "" ?>" required />
                    </div>
                </div>

                    <p>* Champs obligatoires</p>

                    <input class="btn btn-secondary" type="submit" />
                </div>
            </form>

        </section>
    </main>

    <?php
    include('footer.php');
    ?>

