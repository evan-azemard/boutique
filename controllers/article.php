<?php
//Afficher un article prècis en fonction de son id
require ('model/article.php');

function article()
{

    class C_article
    {
        private $id;


        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function article($id)
        {
            $this->setId($id);
            $errors = array();

            $articles = article_info($this->id);

                        $_SESSION['marque']  = $articles['marque_model'];
                        $_SESSION['nom']  = $articles['nom_model'];
                        $_SESSION['resum']  = $articles['resum'];
                        $_SESSION['img']  = $articles['img'];


        }



    }

    //Template
    $template = 'article';
    //Layout (contient header , footer)
    include('view/layout.php');
}