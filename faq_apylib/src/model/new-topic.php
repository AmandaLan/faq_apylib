<?php
class NewTopicModel
{
    public function __construct($db){
        $this->db = $db;

        if (!empty($_POST)) {
            $this->sujet = trim(strip_tags($_POST['tsujet']));
            $this->pseudo = trim(strip_tags($_POST['tpseudo']));
            $this->contenu = trim(strip_tags($_POST['tcontenu']));
            $this->date_creation = trim(strip_tags($_POST[date('Y-m-d H:i:s')]));
            //foreign key
            $this->categorie_id = trim(strip_tags($_POST['tcategories']));
        }
    }
}