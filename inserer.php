<?php
$bd=new PDO ('mysql:host=localhost;dbname=maintenanceweb','root','');
if($bd!=null){
	if (isset($_POST["benregistrer"])) 
	{
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$matricule=$_POST['matricule'];
		$salaire=$_POST['salaire'];
		$nationalite=$_POST['nationalite'];
		$sexe=$_POST['se'];
		$user=$_POST['username'];
		$pwd=$_POST['password'];
	$req = $bd->prepare('insert into maintenanceweb.employe(Nom,Prenom,Matricule,Salaire,Nationalite,Sexe,UserName,Password) values(:n,:pre,:ma,:sa,:na,:se,:u,:p)');
	$req->bindParam(':n',$nom);
	$req->bindParam(':pre',$prenom);
	$req->bindParam(':ma',$matricule);
	$req->bindParam(':sa',$salaire);
	$req->bindParam(':na',$nationalite);
	$req->bindParam(':se',$sexe);
	$req->bindParam(':u',$user);
	$req->bindParam(':p',$pwd);
	$req->execute();
	$req->closeCursor();
	echo "Vous etes maintenant dans la liste des Employe!";
	include'index.php';

	}	
	else if(isset($_POST["bvisualiser"])){

    include'index.php';
  }
else{echo"Echec de connexion";}
}

?>