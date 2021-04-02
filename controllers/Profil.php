<?php
/*Profil*/
require ('model/profil.php');

function profil()
{
    class C_Profil
    {
        //ATTRIBUTES
    private $n_password;
    private $n_login;

         public function getN_password()
    {
        return $this->n_password;
    }

    public function setN_password($n_password)
    {
        $this->n_password = $n_password;
    }

    public function getN_login()
    {
        return $this->n_login;
    }


    public function setN_login($n_login)
    {
        $this->n_login = $n_login;
    }
        public function profil($n_login, $n_password )
        {

            $this->setN_login($n_login);
            $this->setN_password($n_password);
            $errors = array();
            $hpass = password_hash($this->n_password, PASSWORD_DEFAULT);


            if ($this->n_login && $this->n_password) {
                if (strlen($this->n_login) > 12) {
                    array_push($errors, "Le pseudo est trop long");
                }
                if (strlen($this->n_login) < 4) {
                    array_push($errors, "Le pseudo est trop court");
                }
                if ($this->n_login == $this->n_password) {
                    array_push($errors, "Le pseudo et le mot de passe ne doivent pas être identique");
                }
                if (strLen($this->n_password) < 5) {
                    array_push($errors, "Le mot de passe dois faire au moins 5 caractères");
                }
            } else array_push($errors, "Veuillez remplir tous les champs");

            $sel = [];
            P_select();


            foreach ($sel as $row) {
                if ($row["login"] == $this->n_login) {
                    array_push($errors, "Le pseudo est déja utilisé");
                }
            }
            if (count($errors) < 1) {

                update($this->n_login, $hpass, $_SESSION["id"]);
            } else {
                return $errors;
            }

        }

    }

    //Template
    $template = 'profil';
    //Layout (contient header , footer)
    include('view/layout.php');

}