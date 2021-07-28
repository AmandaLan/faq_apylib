<?php
class TopicDetailsController
{
    private $model;

    public function __construct(TopicDetailsModel $model)
    {
        $this->model = $model;
    }
    public function getTopics()
    {
        $query = $this->model->db->prepare("SELECT * FROM topics
        WHERE id = :id");
        $query->bindParam(":id", $this->model->id);
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }   

    public function addMessage(): bool
    {
        // var_dump ($this->model->id);
        $query = $this->model->db->prepare("INSERT INTO messages (contenu, topic_id) VALUES (:contenu, :topic_id)");
        $query->bindValue(":contenu", $this->model->message, PDO::PARAM_STR);       
        $query->bindValue(":topic_id", $this->model->topic_id, PDO::PARAM_INT);
        if ($query->execute()) {
            return true;
        }else {
            return false;
        }       
    } 

    public function getMessage()
    {
        $query = $this->model->db->prepare("SELECT messages.contenu FROM messages 
        INNER JOIN topics 
        ON topics.id = messages.topic_id
        WHERE topic_id = :id");
        $query->bindParam(":id", $this->model->id);
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }  
}
