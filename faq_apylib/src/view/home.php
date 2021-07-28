<?php 
class HomeView 
{
    public function __construct(HomeController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE."home.php";
    }

    public function render(){
        $questions = $this->controller->getFaq();
        $questions2 = $this->controller->getFaq2();
        $categories = $this->controller->getCategories();
        require($this->template);
    }
}
?>