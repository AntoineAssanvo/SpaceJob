<!DOCTYPE html>
<html lang="fr">

<?php
include('../php/head.php');
?>
<title>Planète Développement</title>

<body>
  <!-- PAGE D'ACCUEIL------------------------------------------------------------------------------------>
  <section id="accueil" class="sect-bg grid-wrap" style="background: url('../images/page_img/fond_web.png'); background-attachment: scroll;
  background-repeat: no-repeat; background-size: 100vw;">
    <h1 class="main-title">Planète Développement</h1>

    <div class="main_text_container">
      <h2 class="medium_title">Les métiers du web</h2>
      <p class="info_text">
        Ce systéme regroupe les métiers qui sont en rapport avec les outils du web tel que : les logiciels de
        programmation, de design et de réseau. Il inclut également des compétences artistiques.
        <br><span style='font-size:1.6vw;color:rgb(36, 200, 99);'>Vous etes
          actuellement sur la <span style='font-size:50px'> &#127757;</span> Développement !</span></br>
      </p>
    </div>
    <div class="univ">
      <a href="../dev.php">
        <img src="../images/soleil1.png" class="p_univ move" alt="Retourner à l'univer techniques"></a>
    </div>
    <!--les fleches -->
    <div class="btn_back"> <a href="../dev.php"> <img src="../images/right.png" class="back_arrow" alt="Retourner à la page précédente"></a></div>
    <div class="btn_down"> <a href="#premiere_page"> <img src="../images/arrow.png" class="down_arrow down " alt="page suivante"></a></div>
  </section>
  <!-- PREMIER METIER------------------------------------------------------------------------------------>
  <section id="premiere_page" class="sect-seconde_metier grid-wrap">
    <!-- PARTIE VIDEO------------------------------------------------------------------------------------>
    <div class="video_temoignage">
      <video controls="controls">
        <source src="../videos/développeur.mp4" type="video/mp4">
        <source src="../videos/développeur.webmhd.webm" type="video/webm">
        <source src="../videos/développeur.webmsd.webm" type="video/webmsd">
      </video>
    </div>
    <!-- PARTIE TEXTE------------------------------------------------------------------------------------>
    <div class="metier_container">
      <h2 class="medium_title"><span style='color:rgb(36, 200, 99);'>
          Développeur Web</span>
      </h2>
      <em>En quoi consiste ce métier ?</em>
      <p class="info_metier">
        Un développeur Web est un développeur qui gère à la fois la partie front mais également la partie back. Il doit
        donc être à l’aise avec de nombreux langages de programmation : pour le front, des connaissances en html, css,
        JavaScript, jquery sont nécessaire tandis que pour le back, il devra maîtriser le php, sql, python ou encore
        ruby.</p>
      <p class="info_metier">Il doit être à l’aise sur les applications mobiles mais également sur les sites web. Le
        développeur suivra le projet dans sa fabrication mais également dans sa maintenance.
        <br>
        Il doit donc être très organisé et s’avoir s’adapter à la demande du client. L’anglais est essentiel dans son
        travail, il faut donc qu’il dispose d’un bon niveau. En effet, le web regorge d’informations mais pour la
        plupart elles sont anglophones.
        </br>

      </p>

      <em>Combien gagne t'il ??</em>
      <p class="info_metier">
        Un développeur débutant peut obtenir un salaire tournant autour de
        <span style="color:red;">2 800</span>
        à
        <span style="color:red;">3 500</span>
        euros bruts par mois. Tandis qu’un développeur expérimenté peut viser un salaire d’environ
        <span style="color:red;">5 000</span>
        euros mensuels.
      </p>
      <em>Le niveau d'étude:</em>
      <div class="clear">

        <ul class="niv_etude">
          <li>
            DUT MMI
          </li>

          <li>Licence pro: Spécialisé en informatique
          </li>
          <li>Master: Développement et application sur plateformes mobiles
          </li>
        </ul>
      </div>
    </div>
    <!-- PARTIE TEMOIN CONTACT------------------------------------------------------------------------------------>
    <div class="temoin_container">
      <img src="../images/dev_freelance.png" class="img_profil" alt="Photo de profil ">
    </div>
    <div class="info_temoin">
      <em>Johan C.T</em>
      <p class="para-temoin">
        Johan Coannenterre Thomias est un diplomé du DUT MMI,
        Diplômé d'une Licence 3 Information Communication et préparation d'un Master 1 dans le Digital.
        Il est développeur web depuis 3 ans et il est notamment le porteur du projet SWETY qui a été élus 🏅 <span style='color:rgb(36, 200, 99);'>prix du Numérique de la saison 2019 des Entrepreneuriales </span>.
      </p>
    </div>
    <div class="contact_temoin">
      <h2 class="lil_title">
        Le contacter:</h2>
      <a href="https://www.linkedin.com/in/jthomias/" class="links" target="_blank">
        <i class='fab fa-linkedin-in' style='font-size:24px'></i>
      </a>

    </div>
  </section>
  <!--- FIN DU METIER ------------------------------------------------------------------------------------------------->
  <?php
  include('../php/transition_1.php');
  ?>
  <!-- DEUXIEME METIER --------------------------------------------------------------------------------->
  <section id="seconde_page" class="sect-temoignage grid-wrap">
    <!-- PARTIE VIDEO------------------------------------------------------------------------------------>
    <!--<div class="video_temoignage">
      <video controls="controls">
        <source src="videos/edit_end.mp4" type="video/mp4">
        <source src="videos/edit_end.webm" type="video/webm">
      </video>
    </div>-->
    <!-- PARTIE TEXTE------------------------------------------------------------------------------------>
    <div class="metier_container2">
      <h2 class="medium_title"><span style='color:rgb(36, 200, 99);'>Concepteur Web</span>
      </h2>
      <em>En quoi consiste ce métier ?</em>
      <p class="info_metier">
        Le concepteur web endosse le rôle chef de projet. Il est au cœur du projet. Il coordonne les différentes tâches,
        et permet de faire le lien entre les graphistes, les développeurs et les autre intervenant du projet. Il
        s’assure du respect des délais et des contraintes soulevées par le client.
      </p>
      <p class="info_metier"> Si des modifications doivent être apportées, elles doivent être validées par ses soins. Le
        concepteur web doit être sociable car il fait le lien entre le client et les différents collaborateurs du site.
        Il doit être capable de gérer les différentes contraintes liées au budget, maîtriser les techniques de
        programmation et tous les outils de développement.
        Il doit donc être polyvalent et avoir un très bon niveau en matière de développement. <br>
        Le concepteur web doit également faire preuve d’une grande créativité. Il doit être de nature curieuse pour se
        tenir informer des nouvelles technologies et des nouveaux langages en vigueur. Le concepteur web peut évoluer au
        sein d’une entreprise mais également en tant que free-lance.
        Le concepteur web doit être disponible pour ses clients, il doit être bon communicant pour être en mesure de
        répondre aux attentes de ses clients.</br>

      </p>

      <em>Combien gagne t'il ?</em>
      <p class="info_metier">Le salaire varie selon les années d’expérience et d’ancienneté mais le concepteur web peut
        gagner à ses débuts environ <span style="color:red;">2 000</span> euros bruts par mois et <span style="color:red;">5 000</span> euros en tant que confirmé.</p>
      <em>Le niveau d'étude:</em>
      <div class="clear">

        <ul class="niv_etude">

          <li>
            DUT MMI
          </li>
          <li>Licence Pro conception
          </li>
          <li>Licence Pro : rédaction et réalisation Web
          </li>
        </ul>

      </div>


      <div class="contact_temoin">
        <h2 class="lil_title">
          Pour plus d'information voir :</h2>
        <a href=" https://www.letudiant.fr/metiers/secteur/informatique-telecom-web/concepteur-web.html" class="links" target="_blank"> <img src="../images/l'etu.png" style='height:24px' alt="voir page">

        </a>
        <a href="https://www.studyrama.com/formations/fiches-metiers/internet-web/concepteur-web-1080" class="links" target="_blank">
          <img src="../images/study.png" style='height:24px; margin-left:10px;' alt="voir page">
        </a>
      </div>

  </section>
  <!-- FIN DU METIER 2 VIDEO------------------------------------------------------------------------------------>
  <?php
  include('../php/transition_2.php');
  ?>
</body>

</html>