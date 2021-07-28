<?php
class LoginView
{
    public function __construct(LoginController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE."login.php";
    }

    public function render(){
        $message = "";
        /*! = contraire de vrai, si différent de vide*/
        if (!empty($_POST)) {
            if($this->controller->validateLogin()) {
                header("Location: home");
            } else {
                // Message d'erreur
                $message = "<div class=\"alert alert-danger\">Impossible de se connecter avec les informations saisies</div>";
            }
        }
        require($this->template);
    }
}