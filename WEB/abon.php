<?php
 @$prenom = $_POST["$prenom"];
 @$email = $_POST["$nom"];
 @$mot = $_POST["$mot"];
$pre = "";
$em = "";
$mo = "";
 if (isset($_POST["connexion"])) 
 {
 	if (empty($prenom) && empty($email) && empty($mot)) 
 	{
 		if (empty($prenom)) 
 		{
 			
 			 $pre="veuillez entrer votre prenom d inscription";
 		}
 			if (empty($email))
 			 {
 				
 				$em="veuillez entrer votre email d inscription";
 			}
 				if (empty($mot))
 				{
 					
 					$mo="veuillez entrer votre mot de pass d inscription";
 				}
 	}
 	else
 	{
 		header("location:aceuil.php");
 	}

 }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Abonnement</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="abon.css">
</head>
<body> 
        <table id="to">
          <tr>
              <td>
                <table>
                  <tr>
                     <td >
                      <img src="28.jpeg"   id="logos" style="width:150px;height:150px;border-radius: 100%;margin-left: 100%;">
                     </td>
                  </tr>
                </table>
              </td><div id="navbar-right"></div>
          <td>
        <table class="pous">
            <tr>
                 <td><b><a href="projet.html" >ACCUEIL</a></b></td>
                 <td><b><a href="#seri" >NOS SERVICES</a></b></td>
                 <td><b><a href="#mi" >MITY proche de vous</a></b></td>            </tr>
        </table>
          </td>
          </tr>
        </table>

      <div id="rien">
      	<p> MITY Telecom / Abonnement</p>
      </div>
	<fieldset id="fieldset">

		<legend><img src="is.png" id="im1"> </legend>

	<form method="post" action="projet.html">
				<h1>Conectez-vous <br>ici</h1>
		
		PRENOM :<br> <input type="text" id="t1" name="prenom" value="<?php echo $prenom ?>" placeholder="entrer votre prenom">
			<nav><em><?php echo $pre ?></em></nav><br>

		EMAIL :<br> <input type="gmail" id="t1" name="nom" value="<?php echo $prenom ?>" placeholder="entrer votre email"  >
			 <nav><em> <?php echo $em  ?></em></nav> <br>

		MOT DE PASSE : <br><input type="password" id="t1" name="mot" value="<?php echo $prenom ?>" placeholder="entrer votre mot pass" >
			<nav><em><?php echo $mo ?></em></nav><br>
		
			

				<p><div id="div9"> <input type="submit" name="connexion" id="con" value="Connecte"></div></p>

			<div id="co"><p>connectez-vous avec:<br><a href="https://github.com/choudja07/com"><img src="git.png" id="io"></a><a href="https://trello.com/b/jGHn8FvJ/club-informatique"><img src="trel.jpg" id="io"></a><a href=""><img src="gmail.jpg" id="io"></a><a href=""><img src="fa.jpg" id="io"></a></p></div>

		
	</form>
    	<div id="div2"><a href="" id="div2">Mot de pass oublie?</a></div>
</fieldset>

  </body>
</html>