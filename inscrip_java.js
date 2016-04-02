function verification(x)
{
if(x.nom.value == '') // s'il manque le nom
{
alert('Merci de saisir votre nom');
}
if(x.prenom.value == '') // s'il manque le prenom
{
alert('Merci de saisir votre prénom');
}
if(x.pseudo.value == '') // s'il manque le pseudo
{
alert('Merci de saisir votre matricule');
}
if(x.mail.value == '') // s'il manque le mail
{
alert('Merci de saisir votre numéro de téléphone');
}
if(x.adresse.value == '') // s'il manque l'adresse
{
alert('Merci de saisir votre numéro de téléphone');
}
if(x.numtel.value == '') // s'il manque le tél
{
alert('Merci de saisir votre numéro de téléphone');
}
else
{
x.go.click();
}
VerifMail();
VerifNum();
}

function VerifMail()
	{
	a = document.getElementById("name1").value;
	valide1 = false;

	for(var j=1;j<(a.length);j++){
		if(a.charAt(j)=='@'){
			if(j<(a.length-4)){
				for(var k=j;k<(a.length-2);k++){
					if(a.charAt(k)=='.') valide1=true;
				}
			}
		}
	}
	if(valide1==false)
    alert("Veuillez saisir une adresse email valide.");
	return valide1;
}

function VerifNum()
{
var regexTel =(/^(0[1-68])(?:[ _.-]?(\d{2})){4}$/);
if ( regexTel.test(str))

	alert("Votre numero de telephone n'est pas valide");
	return regexTel;
	}
