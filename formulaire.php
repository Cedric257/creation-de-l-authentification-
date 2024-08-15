<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8/" >
 <title>Inscription</title>
 <link rel="stylesheet" href="style.css">
</head>
 <body>


 	<form method="POST" action="inserer.php"> <fieldset>
 	 <legend>	<h2>Inscrivez-vous</h2></legend>
 		<table>
 			<tr>
 				<td><label class="lab" for="nom">Nom</label></td>
 				<td><input type="text" name="nom" class="inp" id="nom" placeholder="Votre Nom"></td>
 			</tr>
 			<tr>
 				<td><label class="lab" for="prenom">Prenom</label></td>
 				<td><input type="text" name="prenom" class="inp" id="prenom" placeholder="Votre Prenom"></td>
 			</tr>
 			<tr>
 				<td><label class="lab" for="matricule">Matricule</label></td>
 				<td><input type="text" name="matricule" class="inp" id="matricule" placeholder="Matricule"></td>
 			</tr>
 			
 			<tr>
 				<td><label class="lab" for="salaire">Salaire</label></td>
 				<td><input type="text" name="salaire" class="inp" id="salaire" placeholder="Votre Salaire"></td>
 			</tr>
 			<tr><td><label for="nationalite">Nationalite</label> </td>  
   <td> <select name="nationalite" class="nationalite" id="nationalite">   
 
    <option class="Burundaise" value="Burundaise">Burundaise</option>     
    <option class="Congolaise" value="Congolaise">Congolaise</option> 
     <option class="Rwandaise" value="Rwandaise">Rwandaise</option>
     </td>
 </tr>

       <tr><td> <fieldset class="setfield" name="sexe">
          <legend>Sexe</legend>
          <input type="radio"  name = 'se' value= "F" id="se"/><label for="M"> M </label><br />
		  <input type="radio"  name = 'se' value= "M" id="se"/> <label for="F"> F </label>
	 </fieldset></td>
	</tr>
 				<tr><td><label class="lab" for="username">UserName</label></td>
 				<td><input type="text" name="username" class="inp" id="username" placeholder="UserName"></td>
 			</tr>
 			<tr>
 				<td><label class="lab" for="password">Password</label></td>
 				<td><input type="password" name="password" class="inp" id="password" placeholder="........"></td>
 			</tr>
 			
 		</table>

</fieldset>
<input type="submit" name="benregistrer" value="Enregistrer"/> <input type="submit" name="bvisualiser" value="Visualiser" />

 	</form>
 </body>
</html>