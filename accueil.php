<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" href="image.css" href="inscription.php" disabled="" href="image.css" type="text/css" />
    <script language="javascript" src="connexion.js" type="text/javascript"></script>
    <title>LifeOfEcePARTY</title>
  </head>

  <body class="p">

    <header>
        <center > Live Event Of ECE </center>
        <h>  jb </h>
        <div id="im"><!--logo de lecole qui sera sur les pages-->
        <img src="./logo.jpg"/>
        </div>
    </header>

    <img src="./campusece.jpg"/>


    <p>Bienvenue ! Souhaites tu publier ou voir ce qui se trame dans ton ecole?</p>

  <div class="menug">
    <fieldset>
    <nav>
      <ul>
        <li><a href="inscription.html"> Inscription</a></li>
        <li><a href="acceuil.html"> S'identifier</a></li>
        <li><a href="#"> Trouve ton ami</a></li>
      </ul>
    </fieldset>
      <!--<SPAN style="position: absolute; top: 50 px; left: 500 px;">-->
  </div>

  <h1> Entrez votre identifiant et votre mot de passe: </h1>

  <div class="identify">
    <fieldset>
      <form name="forum" method="post" action="recup_donnees_accueil.php" onSubmit="return verification(this.form)">
      <!--<table border=0 align="center">


      <tr><td>Nom Utilisateur<font color="red">*</font></td><td><input type="texte" name="nom" ></td></tr>
      <tr><td>Mot de Passe<font color="red">*</font></td><td><input type="texte" name="mdp" ></td></tr>

    </table>-->
    <!--<div class="bordursid">-->
      <dl>
	    <dt><label for="username"> Identifiant:</label></dt>
      <dd>

          <input name="username"  tabindex="1" accesskey="i" type="text" value="" size="54" autocomplete="false"/>
      <!--</div>-->
      </dd>
      </dl>
      <dl><dt><label for="password">Mot de passe:</label></dt>
        <dd>
        <!--<div class="bordursid">-->
            <input name="password" tabindex="2" accesskey="m" type="password" value="" size="54" autocomplete="off"/>
          <!--</div>-->
        </dd>
      </dl>
      <dl>
        <center><input name="submit" accesskey="l" value="S'identifier" tabindex="4" type="submit" onClick="return verification(this.form)"></center>
      </dl>
      </form>
    </fieldset>
  </div>

<br><br><br><br>



</body>

  <footer id="foot">
    contact         conditions generales               lien

  </footer>
</html>