<?php
require_once("header.php");
?>

<?php
foreach ($topics as $topic) {
?>

    <div class="details">
        <div class="img_details">
            <img src="./assets/img/degrade.png" alt="">
        </div>
        <div class="details_topic">
            <div class="sujet_details">
                <h2><?= $topic['sujet'] ?></h2>
                <p class="sub-info"><?= $topic['date_creation'] ?></p>

            </div>
            <div class="contenu_details">
                <p class="sub-info">par <?= $topic['pseudo'] ?></p>
                <p class="sub-info"><?= $topic['contenu'] ?></p>
            </div>
        </div>
    </div>

    <h1 class="comment_title">Espace commentaire</h1>

    <form class="comment_details" method="POST">
        <textarea placeholder="Votre réponse" name="tmessage" style="width:80%"></textarea><br />
        <input type="text" name="message_id" value="<?= $topic["id"] ?>" hidden />
        <input class="comment_submit" type="submit" value="Postez votre réponse" />
    </form>


<?php
}
?>
<?php
foreach ($messages as $message) {
?>

    <form class="comment_display" method="DELETE">
        <div class="main">
            <p name="tcomment"><?= $message['contenu'] ?></p>
            
            <!-- <input type="text" name="message_id" value="<?= $message["id"] ?>" hidden />
            <input type="submit" value="Supprimer" /> -->
          <hr>    
        </div>   
           
    </form>
<?php
}
?>
<?php
require_once("footer.php");
?>