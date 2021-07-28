<?php 
class NewTopicController
{
    private $model;

    public function __construct(NewTopicModel $model)
    {
        $this->model = $model;
    }
    public function getCategories()
    {
        $query = $this->model->db->query("SELECT id, name FROM categories");
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }
    public function addTopic(): bool
    {
        $query = $this->model->db->prepare("INSERT INTO topics (sujet, pseudo, contenu, date_creation, categorie_id) VALUES (:sujet, :pseudo, :contenu, :date_creation, :categorie_id)");
        $query->bindValue(":sujet", $this->model->sujet, PDO::PARAM_STR);
        $query->bindValue(":pseudo", $this->model->pseudo, PDO::PARAM_STR);
        $query->bindValue(":contenu", $this->model->contenu, PDO::PARAM_STR);
        $query->bindValue(":date_creation", strtotime(date("Y-m-d H:i:s")), PDO::PARAM_STR);
        //foreign key
        $query->bindValue(":categorie_id", $this->model->categorie_id, PDO::PARAM_STR);
        if ($query->execute()) {
            return true;
        }else {
            return false;
        }       
    }
}
// ajout "METHOD POST" quelque chose dans la BDD

//table intermédiaire que dans le cas si mes topices avait plusieur catégories