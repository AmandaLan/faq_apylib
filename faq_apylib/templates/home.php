<?php
require_once("header.php");
?>
<main>
    <div class="header_img">
        <img src="./assets/img/local.png" />
    </div>
    <div class="home">
        <h2>Les questions les plus fréquemments consultez</h2>
        <div class="faq_wrapper">
            <div class="accordion">
                <?php
                foreach ($questions as $question) {
                ?>

                    <div class="accordion_item">
                        <a class="accordion_link" href="#question">
                            <?= $question["quest"] ?>
                            <!-- ******************************LOGO************************************* -->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="plus" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m1 5h-2v4H7v2h4v4h2v-4h4v-2h-4V7z" fill="currentColor"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="minus" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8z" fill="currentColor"></path>
                            </svg>
                        </a>
                        <!-- ******************************REPONSES************************************* -->
                        <div class="answer">
                            <ul>
                                <li>
                                    <?= $question["reponses"] ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="accordion">
                <?php
                foreach ($questions2 as $question2) {
                ?>

                    <div class="accordion_item">
                        <a class="accordion_link" href="#question">
                            <?= $question2["quest"] ?>
                            <!-- ******************************LOGO************************************* -->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="plus" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m1 5h-2v4H7v2h4v4h2v-4h4v-2h-4V7z" fill="currentColor"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="minus" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8z" fill="currentColor"></path>
                            </svg>
                        </a>
                        <!-- ******************************REPONSES************************************* -->
                        <div class="answer">
                            <ul>
                                <li>
                                    <?= $question2["reponses"] ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <h2 class="forum_title">Forum de discussion</h2>
        <div class="forum_wrapper">
            <?php
            foreach ($categories as $categorie) {
            ?>

                <div class="categorie_item">
                    <a href="index.php?page=topics&id=<?= $categorie["id"] ?>">
                        <img class="categorie_icon" src="<?= $categorie["image"] ?>" alt="">
                        <h4 class="categorie_link">
                            <?= $categorie["name"] ?>
                        </h4>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>

        <a class="newTopic" href="new-topic">Posez votre question ici !</a>    

    </div>
</main>

<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php
require_once("footer.php");
?>