
<?php

$bd=new PDO ('mysql:host=localhost;dbname=maintenanceweb','root','');
if($bd==null){echo"Echec de connexion";}
else
{
 if(isset($_POST["bConnecter"])){
   //echo"Bravo vous vous etes connectes"; 
 
$user=$_POST["username"];
$pwd=$_POST["password"];
$req = $bd->prepare("select Nom,Prenom from maintenanceweb.employe where UserName=:u and Password=:p");
$req->execute(array("u"=>$user,"p"=>$pwd));
   $donnee=$req->fetch();
   if($donnee) {
      $nom=$donnee["Nom"];
      $prenom = $donnee["Prenom"];
      echo "Bravo vous etes connectes"."</br>";
      echo "Votre nom est:"." ".$nom." ".$prenom;
      header("location:employe.php");
   }
   else
      {echo "Nom utilisateur ou Mot de passe incorrect";
include"index.php";



   }
}


else if(ISSET($_POST["bnouveau"])){

header('location:formulaire.php');
   
}
}

?>