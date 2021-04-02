<?php
/*Rgister*/

require ('model/register.php');

function register()
{
    class Utilisateurs
    {
        private $login;
        private $password;
        private $r_password;
        private $gender;


        public function getLogin()
        {
            return $this->login;
        }

        public function setLogin($login)
        {
            $this->login = $login;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setPassword($password)
        {
            $this->password = $password;
        }

        public function getR_password()
        {
            return $this->r_password;
        }

        public function setR_password($r_password)
        {
            $this->r_password = $r_password;
        }


        public function getGender()
        {
            return $this->gender;
        }

        public function setGender($gender)
        {
            $this->gender = $gender;
        }


        public function register($login, $password, $r_password, $gender)
        {
            $this->setLogin($login);
            $this->setPassword($password);
            $this->setR_password($r_password);
            $this->setGender($gender);
            $errors = array();
            $hpass = password_hash($this->password, PASSWORD_DEFAULT);
            if ($this->login && $this->password && $this->r_password) {

                if (strlen($this->login) > 12) {
                    array_push($errors, "Le pseudo est trop long");
                }

                if (strlen($this->login) < 4) {
                    array_push($errors, "Le pseudo est trop court");
                }
                if ($this->password !== $this->r_password) {
                    array_push($errors, "Le mot de passe répété n'est pas le même");
                }
                if ($this->login == $this->password) {
                    array_push($errors, "Le pseudo et le mot de passe ne doivent pas être identique");
                }
                $password_required = preg_match('%^(?=[^A-Z]*+.)(?=[^a-z]*+.)(?=[^0-9]*+.)(?=[^\W]*+.)%', $this->password);
                if (!$password_required) {
                    array_push($errors, 'Il faut au moins: 1 caractère spéciale, majuscule, nombre. ');
                }
            } else array_push($errors, "Veuillez remplir tous les champs");

            $sel = [];
            select();

            foreach ($sel as $row) {
                if ($row["pseudo"] == $this->login) {
                    array_push($errors, "Le pseudo est déja utilisé");
                }
            }
            if (count($errors) < 1) {
                if ($this->gender = 1 && $this->gender != 2){
                    RegisterA($this->login, $hpass);
                    /*2 = sellers*/
                }else if ($this->gender = 2 && $this->gender != 1){
                    RegisterB($this->login, $hpass);
                }
            } else {
                array_push($errors, "Veuillez remplir tous les champs");
            }

        }
    }

    //Template
    $template = 'register';
    //Layout (contient header , footer)
    include('view/layout.php');
}

