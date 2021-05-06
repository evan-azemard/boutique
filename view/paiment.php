<?php
if (empty($_SESSION['id'])){
    header("Location: login");
}
?>
<main id="main_paiment">
    <div id="titre_paiment">
        <h1>Paiment Sécurisé</h1>
    </div>
    <section id="section_form_paiment">
        <form method="post">
            <div class="paiment_div1"><p>Paiment possible par PayPal</p></div>
            <div id="paiment_div2">
                <div class="traimoyen4"></div>
                    <i class="fa fa-paypal fa-3x" aria-hidden="true"></i>
                <div class="traimoyen4"></div>
            </div>
            <div class="paiment_div1">
                <p id="paimentparcarte">Paiment par carte</p>
            </div>
            <div class="paiment_div_labput">
                <div class="paiment_label">
                    <label for="titulaire">Titulaire de la carte</label>
                </div>
                <div class="paiment_input">
                    <input type="number"  required id="titulaire">
                </div>
            </div>
            <div class="paiment_div_labput">
                <div class="paiment_label">
                    <label for="carte">Numéro de la carte</label>
                </div>
                <div class="paiment_input">
                    <input type="number" required id="carte">
                </div>
            </div>
            <div id="paiment_div4">
                <div id="paimentdd1">
                    <p>Expire le :</p>
                </div>
                <div class="paimentlabput">
                    <div>
                        <label for="mois">Mois :</label>
                    </div>
                    <div>
                        <input type="number" required id="mois">
                    </div>
                </div>
                <div class="paimentlabput">
                    <div>
                        <label for="annee">Année :</label>
                    </div>
                    <div>
                        <input type="number" required id="annee">
                    </div>
                </div>
            </div>
            <div id="paiment_div_txt">
                <i class="fa fa-cc-visa fa-3x" aria-hidden="true"></i>
                <i class="fa fa-cc-mastercard fa-3x" aria-hidden="true"></i>
            </div>
            <div id="paiment_div">
                <input type="submit" value="Valider le paiment" id="button_paiment">
            </div>
        </form>
    </section>

</main>