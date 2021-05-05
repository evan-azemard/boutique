<?php
require ('model/panier.php');

function debug($variable,$color = null){
if (!isset($color)){
    $color = "gray";
}
    echo "<span style='color: $color; font-weight: bold; font-size: 1.2vh; '>";
    echo '<pre>';
    print_r($variable);
    echo '</pre> <hr>';
    echo '<span>';
}
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


            $articles = article_panier($this->id);

            foreach ($articles as $tab) {
                $id = $tab['id_panier'];
            }

            $articles_pp = article_pp($id);

            debug($articles_pp,"red");




           $articles_panier =  select_panier($id);



        }



    }


    //Template
    $template = 'panier';
    //Layout (contient header , footer)
    include('view/layout.php');
}

?>