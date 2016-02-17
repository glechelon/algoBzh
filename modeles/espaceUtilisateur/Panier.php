<?php

/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 28/01/2016
 * Time: 22:44
 */



class Panier
{
    private $panier;
    private $isEmpty = false;


    function Panier(){

        $this->panier = array();


    }


    public function addProduit($id, $qte)
    {

        $var = "produit" . $id;
        $$var = new Produit($id);
        $$var->setQte($qte);
        array_push($this->panier, $$var);




    }
    public function total(){

        $total = 0;

        foreach ($this->panier as $produit){

            $total = $total + $produit->prixT();

        }

        return $total;

    }

    public function isEmpty(){

        if (empty($this->panier)){

            $this->isEmpty = true;
        }

    }




    public function affichage()
    {

        $this->isEmpty();
        if (!($this->isEmpty)) {

            echo "<table class='tableProd table'>";
            echo "<th>Code de l'article</th><th>Quantité</th><th>Prix unitaire</th> <th>Prix total</th>";

            foreach ($this->panier as $produit) {


                $produit->affichage();



            }
            echo "<td colspan='5'>Total: " . $this->total() . " €</td>";
            echo "</table>";

            ob_start();

            ?>

            <form action="index.php?c=espaceUtilisateur&amp;p=envoyer" method="post">
    <div class ='container-fluid'>
        <div class="col-lg-4"></div>
        <button  class="col-lg-4"><span class =" glyphicon glyphicon-ok"></span> Etape 3: Envoi de la commande</button>
        <div class="col-lg-4"></div>
    </div>

        </form>

<?php

            $bouton = ob_get_clean();

            echo $bouton;

        } else {


            echo "Votre panier est vide";

        }

    }

        public function inserer()
        {

            foreach ($this->panier as $p) {

                $p->inserer();


        }



}


}