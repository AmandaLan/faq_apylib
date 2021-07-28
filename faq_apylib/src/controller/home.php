<?php
class HomeController
{
    private $model;

    public function __construct(HomeModel $model)
    {
        $this->model = $model;
    }
    public function getFaq()
    {
        $query = $this->model->db->query("SELECT quest, GROUP_CONCAT(reponses.answer SEPARATOR '<li>' ) AS reponses
        FROM questions
        INNER JOIN questions_reponses
        ON questions.id = questions_reponses.question_id
        INNER JOIN reponses 
        ON questions_reponses.reponse_id = reponses.id
        GROUP BY questions.id
        LIMIT 0, 5");
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }
    public function getFaq2()
    {
        $query = $this->model->db->query("SELECT quest, GROUP_CONCAT(reponses.answer SEPARATOR '<li>' ) AS reponses
        FROM questions
        INNER JOIN questions_reponses
        ON questions.id = questions_reponses.question_id
        INNER JOIN reponses 
        ON questions_reponses.reponse_id = reponses.id
        GROUP BY questions.id
        LIMIT 5, 5");
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }
    public function getCategories()
    {
        $query = $this->model->db->query("SELECT id, name, image FROM categories
        GROUP BY categories.id");
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }
}
