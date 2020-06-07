<!DOCTYPE html>
<html lang="fr">
<?php
include('../php/head.php');
?>
<title>Planéte Artistique</title>

<body>
  <!-- PAGE D'ACCUEIL------------------------------------------------------------------------------------>
  <section id="accueil" class="sect-bg grid-wrap" style="background: url('../images/page_img/fond_artiste.png'); background-attachment: scroll;
  background-repeat: no-repeat; background-size: 100vw;">
    <h1 class="main-title">Planète Artistique</h1>

    <div class="main_text_container">
      <h2 class="medium_title">Les métiers du web</h2>
      <p class="info_text">
        Cet univers regroupe les métiers qui sont en rapport avec les outils du web tel que : les logiciels de
        programmation, de design et de réseau. Il inclut également des compétences artistiques. <br><span style='font-size:1.6vw;color:#b18867;'>Vous etes
          actuellement sur la <span style='font-size:50px'> &#127759;</span> Artistique !</span></br>
      </p>
    </div>
    <div class="univ">
      <a href="../dev.php">
        <img src="../images/soleil2.png" class="p_univ move" alt="Retourner à l'univer techniques"></a>
    </div>
    <!--les fleches -->
    <div class="btn_back"> <a href="../dev.php"> <img src="../images/right.png" class="back_arrow" alt="Retourner à la page précédente"></a></div>
    <div class="btn_down"> <a href="#premiere_page"> <img src="../images/arrow.png" class="down_arrow down " alt="page suivante"></a></div>
  </section>
  <!-- PREMIER METIER------------------------------------------------------------------------------------>
  <section id="premiere_page" class="sect-temoignage grid-wrap">
    <!-- PARTIE VIDEO------------------------------------------------------------------------------------>
    <div class="video_temoignage">
      <video controls="controls">
        <source src="../videos/montiondesigner.mp4" type="video/mp4">
        <source src="" type="video/webm">
      </video>
    </div>
    <!-- PARTIE INFO METIER 1------------------------------------------------------------------------------------>
    <div class="metier_container">
      <h2 class="medium_title"> <span style='color: #b18867;'>Motion designer</span>
      </h2>
      <em>En quoi consiste ce métier ?</em>
      <p class="info_metier">
        Le motion designer se charge de la création de contenus interactifs 2D ou 3D. Il doit poursuivre l’idée du
        client et ses exigences dans un délai donné.
        Pour cela, le motion designer élabore différents croquis sur l'univers à choisir, puis les propose pour faire
        valider son concept. On parle de moodboard, il doit donc maîtriser parfaitement les logiciels de graphisme et
        d’infographies(PAO).
      </p>
      <p class="info_metier"> Le motion designer utilise de nombreuses techniques qui lui permettent de pouvoir exercer
        dans de nombreux domaines : le cinéma, publicité, jeux vidéo ou les entreprises web.
        C’est pourquoi, toutes les créations numériques de l’entreprise peuvent passer par lui.
        L ’objectif de cette profession de la communication visuelle est de transmettre un message fort à travers des
        animations 3D. <br>La créativité est indispensable pour tout professionnel du graphisme, ils la cultivent en
        travaillant et en s’inspirant du travail d’autres graphistes.
        Il doit également savoir communiquer pour convaincre le client de ces choix par des phrases pertinentes et des
        idées structurées.
        </br>

      </p>

      <em>Combien gagne t'il ?</em>
      <p class="info_metier">L’échelle de salaires s’étale sur une grande amplitude mais il faut compter aux alentours
        de <span style="color: #ff0000;">2 000</span> euros bruts par mois pour un motion designer débutant et <span style="color:#ff0000;">4 000 - 5 500</span> euros pour un senior.</p>
      <em>Le niveau d'étude:</em>
      <span class="info_metier">Les cursus universitaires permettant d’accéder aux métiers du motion design sont très
        rares, il faut
        souvent passer par des établissements privés.</span>
      <span class="info_metier">Les métiers du motion design sont accessibles après un bac + 2 puis par le biais
        d’écoles spécialisées
        en graphisme:</span>
      <ul class="niv_etude">

        <div class="clear">
          <li>
            Gobelins
          </li>
          <li>L'IMAC
          </li>
      </ul>
    </div>

    </div>
    <!-- PARTIE INFORMATION TEMOIN  1------------------------------------------------------------------------------------>
    <div class="temoin_container">
      <img src="../images/motion.JPG" class="img_profil" alt="">
    </div>
    <div class="info_temoin">
      <em style="margin-bottom: 5px;"><span style='color: #b18867;'>Marc-Antoine F.</span></em>
      <p class="para-temoin">
        Marc-Antoine Feriaux ancien du DUT MMI à l'IUT Marne-la-vallée nous raconte son metier de motion designer en alternance.

      </p>
    </div>
    <div class="contact_temoin">
      <h2 class="lil_title">
        Le contacter:</h2>
      <a href="https://www.linkedin.com/in/marc-antoine-f-77985a10b/" class="links" target="_blank">
        <i class='fab fa-linkedin-in' style='font-size:24px'></i>
      </a>
      <a href="https://twitter.com/Yelo_Forellow" class="links" target="_blank">
        <i class='fab fa-twitter' style='font-size:24px'></i>
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
        <source src="../videos/graphiste.mp4" type="video/mp4">
        <source src="../videos/graphiste.webmhd.webm" type="video/webmhd">
        <source src="../videos/graphiste.webmsd.webm" type="video/webmsd">
      </video>
    </div>
    <!-- PARTIE INFO METIER 2------------------------------------------------------------------------------------>
    <div class="metier_container">
      <h2 class="medium_title"><span style='color: #b18867;'> Graphiste</span> </h2>
      <em>En quoi consiste ce métier ?</em>
      <p class="info_metier">
        Le graphiste créer principalement des visuels pour des projets.sect-bgDans un premier temps, il prendra connaissance du besoin client et de ses
        attentes concernant le design. Il réalisera une maquette ou il instaurera une charte graphique. <br> Il aura la
        responsabilité du choix de la place des photos, la taille des caractères et les couleurs qui rendront la
        consultation agréable pour l'utilisateur. Il pourra également créer des identités visuelles telles que des
        pictogrammes pour faciliter la compréhension de l’utilisateur.</br></p>
      <p class="info_metier">
        Il doit avoir une grande maîtrise des logiciels comme <i> Photoshop, Illustrator ou InDesign</i> (suite adobe)
        et des
        outils de maquettage (<i>sketch, Adobe XD</i>).<br> Il peut également avoir de bonnes connaissances en <i>HTML</i> et
        <i>CSS</i>, pour
        savoir
        comment sa maquette devra être mise en place.
        La veille est primordiale dans son domaine que ce soit d’un point de vue outils graphiques ou développement
        front-end. L’autoformation lui permettra de rester à la page et de ne pas se retrouver rapidement dépassé par
        les évènements.
        </br>

      </p>

      <em>Combien gagne t'il ??</em>
      <p class="info_metier">Les salaires tournent autour <span style="color:red;">1 800</span> euros bruts mensuels
        pour un débutant et peu atteindre <span style="color:red;">5 800</span> euros pour un senior.


      </p>
      <em>Le niveau d'étude:</em>
      <div class="clear">

        <ul class="niv_etude">
          <li>
            DUT MMI
          </li>
          <li>Bachelor création et design
          </li>
          <li>License pro: graphisme et création du web
          </li>

        </ul>
      </div>
    </div>

    <div class="temoin_container">
      <img src="../images/graphiste.JPG" class="img_profil" style="width:11.5vw;" alt="">
    </div>

    <div class="info_temoin">
      <em> <span style='color: #b18867;'>Eloïse Marty</span></em>
      <p class="para-temoin">
        Eloïse Marty, ancienne étudiante à Champs-sur-Marne est actuellement graphiste depuis 4 mois au sein d'une entreprise. <br> Elle nous explique le metier de graphiste.
      </p>
    </div>
    <div class="contact_temoin">
      <h2 class="lil_title">
        La contacter:</h2>
      <a href="https://www.linkedin.com/in/elo%C3%AFse-marty-986851151/" class="links" target="_blank">
        <i class='fab fa-linkedin-in' style='font-size:24px'></i>
      </a>

    </div>
  </section>
  <!-- FIN METIER 2 1------------------------------------------------------------------------------------>
  <?php
  include('../php/transition_2.php');
  ?>
</body>

</html>