<?php 
class TopicsView 
{
    public function __construct(TopicsController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE."topics.php";
    }

    public function render(){
        $topics = $this->controller->getTopics();

        require($this->template);
    }
}
?>