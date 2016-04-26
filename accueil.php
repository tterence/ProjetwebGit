<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" href="image.css" href="image.css" type="text/css" />
    <script language="javascript" src="connexion.js" type="text/javascript"></script>
    <title>LifeOfEcePARTY</title>
  </head>

  <body class="p">

    <header>
        <center > Live Event Of ECE </center>
        <div id="im"><!--logo de lecole qui sera sur les pages-->
        <img src="./logo.jpg"/>
        </div>
    </header>

    <img src="./campusece.jpg"/>
  <h1> Entrez votre identifiant et votre mot de passe: </h1>

  <div class="identify">
    <fieldset>
      <form name="forum" method="post" action="recup_donnees_accueil.php">
      <!--<table border=0 align="center">


      <tr><td>Nom Utilisateur<font color="red">*</font></td><td><input type="texte" name="nom" ></td></tr>
      <tr><td>Mot de Passe<font color="red">*</font></td><td><input type="texte" name="mdp" ></td></tr>

    </table>-->
    <!--<div class="bordursid">-->
      <dl>
	    <dt><label for="login"> Identifiant:</label></dt>
      <dd>

          <input name="login" type="text" placeholder="exemple: jdoe" autocomplete="false"/>
      <!--</div>-->
      </dd>
      </dl>
      <dl><dt><label for="password">Mot de passe:</label></dt>
        <dd>
        <!--<div class="bordursid">-->
            <input name="password" type="password" autocomplete="off"/>
          <!--</div>-->
        </dd>
      </dl>
      <dl>
		<center><input name="submit" value="S'identifier" type="submit"></center>
		<center><input type="button" value="S'inscrire" onClick="self.location.href=('inscription.php');"></center>
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