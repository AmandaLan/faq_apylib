<?php
class CreateAccountModel
{
    public function __construct($db)
    {
        $this->db = $db;
        if (!empty($_POST)) {
            $this->email = trim(strip_tags($_POST['email']));
            $this->emailConfirm = trim(strip_tags($_POST['emailConfirm']));
            $this->password = trim(strip_tags($_POST['password']));
            $this->passwordConfirm = trim(strip_tags($_POST['passwordConfirm']));
            $this->firstname = trim(strip_tags($_POST["firstname"]));
            $this->lastname = trim(strip_tags($_POST["lastname"]));
        }
    }
}
