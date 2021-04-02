<?php
require ('model/login.php');
/*Le login*/
function login()
{
    class C_Login
    {
        //ATTRIBUTES
        private $login;
        private $password;
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

        public function getGender()
        {
            return $this->gender;
        }

        public function setGender($gender)
        {
            $this->gender = $gender;
        }

        public function loginF($login, $password, $gender)
        {

            $this->setLogin($login);
            $this->setPassword($password);
            $this->setGender($gender);
            $errors = array();
            if ($this->login && $this->password ) {

                if ($this->gender = 1 && $this->gender != 2){
                    $tab = F_login($this->login);
                    /*2 = seller*/
                }else if ($this->gender = 2 && $this->gender != 1){
                    $tab = F_login2($this->login);
                }

                $hpass = $tab["password"];

                if (!password_verify($this->password, $hpass)) {
                    array_push($errors, 'Mot de passe invalide');
                }

                if (count($errors) < 1) {
                    if ($tab['rank'] == 1){
                        $_SESSION["users"] = $tab['rank'];
                    }elseif ($tab['rank'] == 2){
                        $_SESSION["sellers"] = $tab['rank'];
                    }
                    $_SESSION["rank"] = $tab['rank'];
                    $_SESSION["rank"] = $tab['rank'];
                    $_SESSION["user"] = $tab;
                    $_SESSION["id"] = $tab["id_user"];
                    $_SESSION["login"] = ucfirst(strtolower($tab["pseudo"]));
                } else {
                    return $errors;
                }

            }

        }

    }

    //Template
    $template = 'login';
    //Layout (contient header , footer)
    include('view/layout.php');
}