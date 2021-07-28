<?php
require_once("header.php");
?>
<div class="body_topic">
    <div class="graduent_topic">

        <div class="topics">
            <table>
                <tr class="header_topic">
                    <th class="main_topic">Sujet</th>
                    <th class="sub-info">Dernier message</th>
                    <th class="sub-info">Création</th>
                </tr>
                <?php
                foreach ($topics as $topic) {
                ?>
                    <tr>
                        <td class="main">
                            <h4><a href="index.php?page=topic-details&id=<?= $topic["id"] ?>"><?= $topic['sujet'] ?></a></h4>
                        </td>
                        <td class="sub-info"><?= $topic['date_creation'] ?></td>
                        <td class="sub-info">par <?= $topic['pseudo'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<div class="margin_topic">

</div>
<?php
require_once("footer.php");
?>