<?php
class CreateAccountView
{
    public function __construct(CreateAccountController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE."create-account.php";
    }

    public function render()
    {
        $message = "";
        if (!empty($_POST)) {
            $data = $this->controller->getDataForm();

            if (!$this->controller->validateForm()) {
                $errors["message"] = "L'email ou le mot de passe ne correspond, le mot de passe doit contenir 6 caractères minimum, une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial";
            }

            if (empty($errors)) {
                if ($this->controller->addUser()){
                    header("Location: login");
                } else {
                    $message = "Erreur de bdd";
                }
            } else {
                // Message d'erreur
                $message = "<div class=\"alert alert-danger\">{$errors["message"]}</div>";
            }
        }
        require($this->template);
    }
}
