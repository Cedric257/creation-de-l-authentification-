<h2>La liste des Employes</h2>
 <?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maintenanceweb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 
?>

 <?php 
	$rq=mysqli_query($conn,"select * from employe");
	print'<div style="overflow-x:auto;">';
	print'<table border="3" id="tbfich">';
	print'<tr><th>Nom</th><th>Prenom</th><th>Matricule</th><th>Salaire</th><th>Nationalite</th><th>Sexe</th></tr>';
	while ($row = mysqli_fetch_assoc($rq)){
	
	$cnom=$row['Nom'];
	$cprenom=$row['Prenom'];
	$cmatricule=$row['Matricule'];
	$csalaire=$row['Salaire'];
	$cnationalite=$row['Nationalite'];
	$csexe=$row['Sexe'];
	
	print'<tr>';
	
	print'<td>';
	     echo 	$cnom;
	print'</td>';
	
		print'<td>';
	     echo 	$cprenom;
	print'</td>';
	print'<td>';
	     echo $cmatricule;
	print'</td>';
	
	
	print'<td>';
	    echo 	$csalaire;
	print'</td>';
	
		print'<td>';
	    echo 	$cnationalite;
	print'</td>';
	print'<td>';
	   echo $csexe;
	print'</td>';

	print'</tr>';
		}
	print'</table >';
print'</div>';

	?>