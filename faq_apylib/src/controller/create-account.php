<?php
require("common.php");

class CreateAccountController extends CommonController
{
    private $model;

    public function __construct(CreateAccountModel $model)
    {
        $this->model = $model;
    }
//appel ce qu'on a dans le model
    public function getDataForm() {
        return array(
            "email" => $this->model->email,
            "emailConfirm" => $this->model->emailConfirm,
            "password" => $this->model->password,
            "passwordConfirm" => $this->model->passwordConfirm,
            "firstname" => $this->model->firstname,
            "lastname" => $this->model->lastname
        );
    }
//permet de valider si les champs son correctement rempli(les inputs)
    public function validateForm() {
        if (($this->model->email != $this->model->emailConfirm) || ($this->model->password != $this->model->passwordConfirm)) {
            return false;
        } else {
            // On valide la présence ou non d'une lettre majuscule, minuscule et d'un chiffre
            $uppercase = preg_match("/[A-Z]/", $this->model->password);
            $lowercase = preg_match("/[a-z]/", $this->model->password);
            $number = preg_match("/[0-9]/", $this->model->password);
            // Caractère spécial
            $specialChar = preg_match("/[^a-zA-Z0-9]/", $this->model->password);
    
            if (!$uppercase || !$lowercase || !$number || !$specialChar || strlen($this->model->password) < 6) {
                return false;
            }
        }

        return true;
    }
//permet d'ajouter dans ma BDD
    public function addUser() : bool {
        $password = $this->cryptPassword($this->model->password);

        // Insertion de l'utilisateur en bdd
        $query = $this->model->db->prepare("INSERT INTO users (email, password, firstname, lastname) VALUES(:email, :password, :firstname, :lastname)");
        $query->bindParam(":email", $this->model->email);
        $query->bindParam(":password", $password);
        $query->bindParam(":firstname", $this->model->firstname);
        $query->bindParam(":lastname", $this->model->lastname);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
