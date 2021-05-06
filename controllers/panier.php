<?php
require ('model/panier.php');
function panier(){

    class C_affiche
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



        public function affiche_panier($id)
        {
            $this->setId($id);

            /*Récupére l'id du panier*/
            $articles = article_panier($this->id);


                /*Selectione tout les produit du même panier*/

              $articles_pp =  article_pp($articles);

            /*Selectione l'article qui correspond à l'id */
            $select_all = select_all((int)$articles_pp);

        foreach ($select_all as $all){
            $al = $all['luminosite'];
        }
            ?> <pre>

    <?php
    print_r($all['luminosite']);
    ?>
            </pre> <?php

        }



    }


    //Template
    $template = 'panier';
    //Layout (contient header , footer)
    include('view/layout.php');
}

?>