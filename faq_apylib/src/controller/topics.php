<?php
class TopicsController
{
    private $model;

    public function __construct(TopicsModel $model)
    {
        $this->model = $model;
    }
    public function getTopics()
    {
        $query = $this->model->db->prepare("SELECT * FROM topics
        WHERE categorie_id= :id");
        $query->bindParam(":id", $this->model->id);
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }    
}
