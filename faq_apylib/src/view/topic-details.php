<?php 
class TopicDetailsView 
{
    public function __construct(TopicDetailsController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE."topic-details.php";
    }

    public function render(){
        $topics = $this->controller->getTopics();

        $messageError = "";
        /*! = contraire de vrai, si différent de vide*/
        $messages = $this->controller->getMessage();

        if (!empty($_POST)) {
            if ($this->controller->addMessage()) {
                // header("Location: index.php?page=topic-details&id={$topics['id']}");
                header("Refresh:0");
            } else {
                $messageError = "<div class=\"alert alert-danger\">Impossible d'ajouter un commentaire </div>";
            }
        }
        require($this->template);
    }
}
?>