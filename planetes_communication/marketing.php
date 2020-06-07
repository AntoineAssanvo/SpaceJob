<!DOCTYPE html>
<html lang="fr">
<?php
include('../php/head.php');
?>
<title>Planète Marketing</title>

<body>
  <!-- PAGE D'ACCUEIL------------------------------------------------------------------------------------>
  <section id="accueil" class="sect-bg grid-wrap" style="background: url('../images/page_img/fond_marketing.png'); background-attachment: scroll;
  background-repeat: no-repeat; background-size: 100vw;">
    <h1 class="main-title">Planète Marketing</h1>

    <div class="main_text_container">
      <h2 class="medium_title">Les métiers du web</h2>
      <p class="info_text">
        Ce systéme est lié à la relation stratégie marketings et web.
        Les outils utilisées sont des supports de communication web, d'analyse marketing et papier. <br><span style='font-size:1.6vw;color: rgb(214, 75, 56);'>Vous êtes
          actuellement sur la <span style='font-size:50px'> &#127764;</span> Marketing !</span></br>
      </p>
    </div>
    <div class=" univ">
      <a href="../com.php">
        <img src="../images/soleil2.png" class="p_univ move" alt="Retourner à l'univer techniques"></a>
    </div>
    <div class="btn_back"> <a href="../com.php"> <img src="../images/right.png" class="back_arrow" alt="Retourner à la page précédente"></a></div>
    <div class="btn_down"> <a href="#seconde_page"> <img src="../images/arrow.png" class="down_arrow down " alt="page suivante"></a></div>
  </section>
  <!-- PREMIER METIER--------------------------------------------------------->
  <section id="premiere_page" class="sect-temoignage grid-wrap">
    <!-- PARTIE VIDEO------------------------------------------------------------------------------------>
    <div class="video_temoignage">
      <video controls="controls">
        <source src="../videos/community_manager.mp4" type="video/mp4">
        <source src="../videos/community_manager.webmhd.webm" type="video/webmhd">
        <source src="../videos/community_manager.webmsd.webm" type="video/webmsd">
      </video>
    </div>
    <!-- PARTIE INFO METIER 1------------------------------------------------------------------------------------>
    <div class="metier_container">
      <h2 class="medium_title">
        <span style='color: rgb(214, 75, 56);'>Community Manager</span>
      </h2>
      <em>En quoi consiste ce métier ?</em>
      <p class="info_metier">
        Le métier de community manager consiste à gérer les échanges d’une marque, d’une entreprise, d’un site avec ses
        internautes. En effet, avec l’essor des réseaux sociaux, le community manager se sert de ces plateformes pour
        créer une vraie communauté et promouvoir un produit, une marque ou un site.
        <br>Il utilise de nombreux réseaux comme YouTube, Instagram mais également des réseaux dits professionnels comme
        LinkedIn.
        <br>
        Un community manager est l’ambassadeur d’une « marque » auprès des internautes qui lui sont fidèles et suivent
        son contenu. Il est la passerelle entre une entreprise et sa cible, il donne une dimension plus humaine et
        accessible.

      </p>
      <p class="info_metier">
        Le community manager va diffuser des conseils, interagir avec l’internaute et créer du contenu comme des blogs,
        des fiches produits ou des vidéos promotionnels. Il rassemblera un groupe de personnes derrière lui grâce à son
        style et sa touche personnelle pour promouvoir la marque.
        <br>Le community manager exerce d’autres activités comme l'analyse des résultats, la production de contenu
        rédactionnel, d'images et de photos (content manager).

      </p>

      <em>Combien gagne t'il ?</em>
      <p class="info_metier">Le salaire est de
        <br>
        <span style="color: #ff0000;">2 000</span>
        brut par mois en moyenne pour un community manager débutant.
        <br>
        Mais la rémunération augmente rapidement.
      </p>
      <em>Le niveau d'étude:</em>
      <span class="info_metier">Pour exercer le métier de community manager, il existe différent parcours possible. Un
        bac +2 minimum est nécessaire. <br> Nous vous proposons un parcours réalisable en effectuant un DUT MMI :</span>
      <ul class="niv_etude">

        <div class="clear">
          <li>
            DUT MMI
          </li>

          <li>
            Licence pro métiers du numérique : Conception, rédaction et réalisation
          </li>

          <li>
            MBA: marketing digital
          </li>
      </ul>
    </div>

    </div>

    <!-- PARTIE INFORMATION TEMOIN 1------------------------------------------------------------------------------------>
    <div class="temoin_container">
      <img src="../images/community_M.png" class="img_profil" alt="">
    </div>
    <div class="info_temoin">
      <em>
        <span style='color: rgb(214, 75, 56);'>Valentin Rehheiser</span>
      </em>
      <p class="para-temoin">
        Valentin est un étudiant en 3ème année de <span style='color: rgb(214, 75, 56);'> Bachelor Responsable de Communication</span>. Il nous raconte son parcours et
        son metier actuel en tant que community manager.
      </p>
    </div>
    <div class="contact_temoin">
      <h2 class="lil_title">
        Le contacter:</h2>
      <a href="https://www.linkedin.com/in/valentin-rehheiser-b74828164/ " class="links" target="_blank">
        <i class='fab fa-linkedin-in' style='font-size:24px'></i>
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
      <video controls="controls" width="400" height="300">
        <source src="../videos/chef-de-projet.mp4" type="video/mp4">

      </video>
    </div>
    <!-- PARTIE INFO METIER 2------------------------------------------------------------------------------------>
    <div class="metier_container">
      <h2 class="medium_title"> <span style='color: rgb(214, 75, 56);'>Chef de projet multimédia</span>
      </h2>
      <em>En quoi consiste ce métier ?</em>
      <p class="info_metier">Le chef de projet multimédia est un métier très varié et peut prendre différentes formes selon
        l’environnement dans lequel il est exercé. Le métier de chef de projet peut être un chef de projet
        <i>
          e-commerce</i>,<i>
          éditorial</i>
        ou encore
        <i>intranet</i>. Le chef de projet a pour rôle de mener son équipe et de la diriger pour atteindre l’objectif
        fixé.

        <br>Il faut qu’il soit pluridisciplinaire pour pouvoir aider au mieux son équipe et comprendre les difficultés
        qu’elle peut rencontrer. Le chef de projet a beaucoup de responsabilités et peut agir sur la totalité du projet,
        il a un droit de regard sur l’ensemble des étapes.</p>
      <p class="info_metier">Le métier de chef de projet, comme beaucoup d’autres métiers, peut varier selon la taille
        de l’entreprise. Mais certaines tâches seront toujours présentes quelle que soit la taille de l’entreprise. En
        effet, il devra définir les besoins et voir si le projet est réalisable d’un point de vue technique mais
        également d’un point de vue timing et budget.
      </p>
      <p class="info_metier"></p>

      <em>Combien gagne t'il ??</em>
      <p class="info_metier">
        Le salaire est d’environ
        <span style="color:red;">2 200</span>
        brut par mois pour un chef de projet multimédia débutant salarié.
        <br>
        Par ailleurs, la rémunération évolue rapidement.
      </p>
      <em>Le niveau d'étude:</em>
      <span class="info_metier">Pour exercer le métier de chef de projet multimédia, il faut minimum un bac +5. Il y a
        différents parcours possibles. Nous vous proposons un parcours réalisable en effectuant un DUT MMI :</span>
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
    <div class="info_temoin2">
      <em>Le métier de chef de projet multimédia</em>
      <p class="para-temoin">
        Tous droits réservés, copyright ©Annabac
      </p>
    </div>
    <div class="contact_temoin">
      <h2 class="lil_title">
        Lien vers la video</h2>
      <a href="https://www.youtube.com/watch?v=5R6QY8T-xgw" class="links" target="_blank">
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