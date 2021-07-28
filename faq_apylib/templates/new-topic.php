<?php
require_once("header.php");
?>

<form class="newTopic" method="POST">

    <h2 class="title_topic">Nouveau Sujet</h2>

    <section class="section_wave">
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
    </section>

    <div class="form_topic">
        <div class="input_topic">
            <label for="inputTopic">Sujet</label>
            <input type="text" name="tsujet" size="70" maxlength="70" />

            <label for="inputPseudo">Pseudo</label>
            <input type="text" name="tpseudo" size="70" maxlength="70" />

            <label for="inputCategories">Catégories</label>
            <select name="tcategories">
                <?php
                foreach ($categories as $categorie) {
                ?>
                    <!-- value passe mon catégorie(id) dans catégorie_id de ma table topics -->
                    <option class="categorie_link" value="<?= $categorie["id"] ?>">
                        <?= $categorie["name"] ?>
                    </option>

                <?php
                }
                ?>
            </select>
            <label for="inputMessage">Message</label>
            <textarea class="inputMessage" name="tcontenu"></textarea>
            <!-- <h3>Me notifier des réponses par mail</h3>
        <input type="checkbox" name="tmail" /> -->

            <div class="button_topic">
            <input class="submit_topic" type="submit" name="tsubmit" value="Poster le Topic" />

            <a class="return_topic" href="home">Retour</a>
            </div>
        </div>
        
        <?php if (isset($terror)) { ?>
            <td colspan="2"><?= $terror ?></td>
        <?php } ?>
    </div>
</form>

