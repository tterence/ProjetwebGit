<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" href="image.css" href="inscription.html" disabled="" type="text/css" />
  <script language="javascript" src="./inscrip_java.js" type="text/javascript"></script>
  <title>LifeOfEcePARTY</title>

</head>
<body class="p">

    <h2> Veuillez remplir ce formulaire pour vous inscrire: </h2>

    <div class="identify">
    <form name="forum" method="post" action="recup_donnees_inscription.php" onSubmit="return verification(this.form)">
    <fieldset>
    <table border=0 align="center">


      <tr><td>Nom:<font color="red">*</font></td><td><input type="texte" name="nom" ></td></tr>

      <tr><td>Prenom:<font color="red">*</font></td><td><input type="texte" name="prenom" ></td></tr>

      <tr><td>Pseudo:<font color="red">*</font></td><td><input type="texte" name="pseudo"></td></tr>

      <tr><td>Adresse mail:<font color="red">*</font></td><td><input id="name1" type="texte" name="mail"></td></tr>

      <tr><td>Adresse:</td><td><input type="texte" name="adresse"></td></tr>

      <tr><td>Telephone:</td><td><input type="texte" name="numtel"></td></tr>

    </table>

    <br><br>
    <center ><input type="button" value="Inscription" onClick="verification(forum)"></center>

    </form>
    </fildset>
    </div>

</body>
</html>
