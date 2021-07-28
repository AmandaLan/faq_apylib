<?php
class NewTopicView
{
    public function __construct(NewTopicController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "new-topic.php";
    }

    public function render()
    {
        $categories = $this->controller->getCategories();

        $message = "";
        /*! = contraire de vrai, si différent de vide*/
        if (!empty($_POST)) {
            if ($this->controller->addTopic()) {
                header("Location: home");
            } else {
                $message = "<div class=\"alert alert-danger\">Impossible de créer un topic</div>";
            }
        }
        require($this->template);
    }
}
