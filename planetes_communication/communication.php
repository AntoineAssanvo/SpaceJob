<!DOCTYPE html>
<html lang="fr">
<?php
include('../php/head.php');
?>
<title>Planète Communication</title>

<body>
    <!-- PAGE D'ACCUEIL------------------------------------------------------------------------------------>
    <section id="accueil" class="sect-bg grid-wrap" style="background: url('../images/page_img/fond_communication.png'); background-attachment: scroll;
  background-repeat: no-repeat; background-size: 100vw;">
        <h1 class="main-title">Planète Communication</h1>

        <div class="main_text_container">
            <h2 class="medium_title">Les métiers du web</h2>
            <p class="info_text">
                Ce systéme est lié à la relation stratégie marketings et web. Les outils utilisées sont des supports de
                communication web, d'analyse marketing et papier.
                <br>
                <span style='font-size:1.6vw;color: rgb(214, 55, 153);'>Vous êtes actuellement sur la
                    <span style='font-size:50px'>&#127766;</span>
                    Communication !</span></br>
            </p>
        </div>
        <div class="univ">
            <a href="../com.php">
                <img src="../images/soleil2.png" class="p_univ move" alt="Retourner à l'univer techniques"></a>
        </div>
        <!--les fleches -->
        <div class="btn_back">
            <a href="../com.php">
                <img src="../images/right.png" class="back_arrow" alt="Retourner à la page précédente"></a>
        </div>
        <div class="btn_down">
            <a href="#premiere_page">
                <img src="../images/arrow.png" class="down_arrow down " alt="page suivante"></a>
        </div>
    </section>
    <!-- PREMIER METIER------------------------------------------------------------------------------------>
    <section id="premiere_page" class="sect-temoignage grid-wrap">
        <!-- PARTIE VIDEO------------------------------------------------------------------------------------>
        <div class="video_temoignage">
            <iframe src="https://www.youtube.com/watch?v=zstv44N5qj4&list=PLE1GuV9oxhyRNsQqz0MMECTd6DKSdkIgc&index=2&t=0s"> </iframe>
        </div>
        <!-- PARTIE INFO METIER 1------------------------------------------------------------------------------------>
        <div class="metier_container">
            <h2 class="medium_title">
                <span style='color: rgb(214, 55, 153);'>Consultant SEO</span>
            </h2>
            <em>En quoi consiste ce métier ?</em>
            <p class="info_metier">
                Le métier de consultant SEO fait référence au domaine du e-marketing. Son travail a pour but de
                positionner un site web sur les différents moteurs de recherche. Ce consultant doit faire en sorte que
                le site soit le plus visible par un maximum de personnes.
                <br>l faut savoir que l’audience d’un site web s'accroît avec une qualité de référencement. Un bon
                référencement permettra au site de se retrouver en tête des recherches quand les mots-clés associés sont
                recherchés.
                <br>
                Le consultant SEO (Search Engine Optimization) agit au niveau des moteurs de recherches. De nombreuses
                analyses et comparaisons de la concurrence ont lieu pour que le choix des mots-clés et la création de
                contenu aboutisse à un bon classement dans les moteurs de recherche.
            </p>
            <p class="info_metier">
                Le consultant SEO devra soumettre un rapport d’évaluation qui déterminera le retour sur investissement.
                Il peut travailler dans une agence web, chez le client mais également en indépendant.
                <br>
                Il faut savoir qu’il existe différents types de référenceurs : des référenceurs en achat de mots-clés
                (SEM-Search Engine Marketing) ou sur les réseaux sociaux (SMO - Social Media Optimization).

            </p>

            <em>Combien gagne t'il ?</em>
            <p class="info_metier">Pour exercer ce métier, des compétences en informatique sont demandées mais également
                en marketing et en communication. Le salaire est aux alentours de<br>
                <span style="color: #ff0000;">1 800</span>
                brut par mois en début de carrière et peut aller jusqu’à
                <span style="color: #ff0000;">3 000</span>
                pour les plus confirmés.
            </p>
            <em>Le niveau d'étude:</em>
            <span class="info_metier">Pour exercer le métier de consultant SEO. Il y à différent parcours possible. Nous vous proposons un parcours réalisable en effectuant un DUT MMI :</span>

            <div class="clear">
                <ul class="niv_etude">
                    <li>
                        DUT MMI
                    </li>
                    <li>
                        Licence pro: E-commerce et marketing numérique
                    </li>
                    <li>
                        Master pro: Communication et multimédia

                    </li>
                </ul>

            </div>

        </div>

        <!-- PARTIE INFORMATION TEMOIN 1------------------------------------------------------------------------------------>
        <div class="temoin_container">
            <img src="../images/seo.JPG" class="img_profil " alt="">
        </div>
        <div class="info_temoin">
            <em>
                <span style='color: rgb(214, 55, 153);'>Linda Schell</em>
            <p class="para-temoin">
                Linda Schel consultante seo depuis 2003, répond à differentes questions concernant ses études, les caractéristique de son métier.
            </p>
        </div>
        <div class="contact_temoin">
            <h2 class="lil_title">
                Les liens:</h2>
            <a href="https://www.linkedin.com/in/linda-schell/" class="links" target="_blank">
                <i class='fab fa-linkedin-in' style='font-size:24px'></i>
            </a>
            <a href="https://twitter.com/lindaschell_ASC" class="links" target="_blank">
                <i class='fab fa-twitter' style='font-size:24px'></i>
            </a>
            <a href="https://www.youtube.com/watch?v=zstv44N5qj4&list=PLE1GuV9oxhyRNsQqz0MMECTd6DKSdkIgc&index=2&t=0s" class="links" target="_blank">
                <i style="color: red;" class='fab fa-youtube' style='font-size:24px'></i>
            </a>
        </div>

    </section>
    <!--- FIN DU METIER -->
    <?php
    include('../php/transition_1.php');
    ?>
    <!-- DEUXIEME METIER --------------------------------------------------------------------------------->
    <section id="seconde_page" class="sect-seconde_metier grid-wrap">
        <!-- PARTIE VIDEO------------------------------------------------------------------------------------>
        <div class="video_temoignage">
            <iframe src="https://www.youtube.com/watch?v=2vimkniOeU0&list=PLE1GuV9oxhyRNsQqz0MMECTd6DKSdkIgc&index=4"> </iframe>
            <!-- <video controls="controls" width="400" height="300">
                <source src="../videos/entrepreneur_web.mp4" type="video/mp4">
                <source src="videos/entrepreneur_web.webmhd.webm" type="video/webmhd">
                <source src="videos/entrepreneur_web.webmsd.webm" type="video/webmsd">
            </video>-->
        </div>
        <!-- PARTIE INFO METIER 2------------------------------------------------------------------------------------>
        <div class="metier_container">
            <h2 class="medium_title">
                <span style='color: rgb(214, 55, 153);'>Entrepreneur Web</span>
            </h2>
            <em>En quoi consiste ce métier ?</em>
            <p class="info_metier">Le chef de projet web est un métier très varié et peut prendre différentes formes
                selon l’environnement dans lequel il est exercé. Le métier de chef de projet peut être un chef de projet
                <i>
                    e-commerce</i>,<i>
                    éditorial</i>
                ou encore
                <i>intranet</i>. Le chef de projet a pour rôle de mener son équipe et de la diriger pour atteindre
                l’objectif fixé.
                <br>
                Il doit être compétent dans tous les domaines : à la fois en marketing mais également dans les domaines
                techniques comme le développement.
                <br>Il faut qu’il soit pluridisciplinaire pour pouvoir aider au mieux son équipe et comprendre les
                difficultés qu’elle peut rencontrer. Le chef de projet a beaucoup de responsabilités et peut agir sur la
                totalité du projet, il a un droit de regard sur l’ensemble des étapes.</p>
            <p class="info_metier">Le métier de chef de projet, comme beaucoup d’autres métiers, peut varier selon la
                taille de l’entreprise. Mais certaines tâches seront toujours présentes quelle que soit la taille de
                l’entreprise. En effet, il devra définir les besoins et voir si le projet est réalisable d’un point de
                vue technique mais également d’un point de vue timing et budget.
            </p>
            <p class="info_metier"></p>

            <em>Combien gagne t'il ??</em>
            <p class="info_metier">
                Le salaire est d’environ
                <span style="color:red;">2 200</span>brut par mois pour un chef de projet web débutant salarié. Par
                ailleurs, la rémunération évolue rapidement.
            </p>
            <em>Le niveau d'étude:</em>
            <span class="info_metier">Pour exercer le métier de chef de projet web, il faut minimum un bac +5. Il y a
                différents parcours possibles. Nous vous proposons un parcours réalisable en effectuant un DUT MMI
                :</span>

            <div class="clear">
                <ul class="niv_etude">
                    <li>
                        DUT MMI
                    </li>
                    <li>
                        Licence pro: Conception et gestion de sites internet
                    </li>
                    <li>
                        Licence pro: Conception et développement de sites web

                    </li>
                </ul>
                <ul class="niv_etude">
                    <li>
                        Master pro: Informatique et communication
                    </li>
                    <li>
                        Master pro: Gestion éditoriale et communication internet

                    </li>

                </ul>

            </div>
        </div>
        <!-- PARTIE INFORMATION TEMOIN 1------------------------------------------------------------------------------------>
        <div class="temoin_container">
            <img src="../images/entrepreneur.png" class="img_profil" alt="">
        </div>
        <div class="info_temoin">
            <em>
                <span style='color: rgb(214, 55, 153);'>Jonathan Noble</span></em>
            <p class="para-temoin">
                Jonathan Noble est un jeune entrepreneur de 25 ans. Après un Bac S, puis un DUT MMI par alternance chez
                tuto.com.
                <br>
                En août 2015 que je décide d’arrêter mes études pour monter ma 1ère startup, le projet que je porte
                depuis mes 15 ans : Swello.
            </p>
        </div>
        <div class="contact_temoin">
            <h2 class="lil_title">
                Les liens:</h2>
            <a href="https://www.linkedin.com/in/noblejonathan/" class="links" target="_blank">
                <i class='fab fa-linkedin-in' style='font-size:24px'></i>
            </a>
            <a href="https://twitter.com/Gafisme" class="links" target="_blank">
                <i class="fab fa-twitter" style='font-size:24px'></i>
            </a>
            <a href="https://www.youtube.com/watch?v=2vimkniOeU0&list=PLE1GuV9oxhyRNsQqz0MMECTd6DKSdkIgc&index=4" class="links" target="_blank">
                <i style="color: red;" class='fab fa-youtube' style='font-size:24px'></i>
            </a>
        </div>

    </section>
    <!-- FIN METIER 2 1------------------------------------------------------------------------------------>
    <?php
    include('../php/transition_2.php');
    ?>
</body>

</html>