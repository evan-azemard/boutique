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

            var_dump($articles);

/*$i = 0;
while ($i < 20){


    $i++;
}*/


                /*Selectione tout les produit du même panier*/

/*              $articles_pp =  article_pp($articles);*/

            /*Selectione l'article qui correspond à l'id */
/*            $articlekey = array_values($articles_pp);*/
/*            var_dump($articlekey);*/
/*            $select_all = select_all($articlekey);*/

/*            var_dump($select_all['luminosite']);*/
            ?> <pre>

    <?php
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