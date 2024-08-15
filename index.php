<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8/" >    
 <title>Examen- Pratique</title>
 
 <link rel="stylesheet" href="style.css">

</head>
 <body>
  <div class="login">
 	<form method="post" action="authentification.php">      <fieldset> 
 <legend><h2>Authentification</h2> </legend> <!-- Titre du fieldset -->  
 
      <table>
      	<tr>
      <td><label for="UserName">UserName</label>  </td>   
	   <td><input type="text" name="username" id="username" placeholder="Enter your UserName"/></td>
	</tr> 
	<tr>
	   <td><label for="password">Password</label> </td>   
	   <td><input type="password" name="password" id="password" placeholder="Enter your Password" />  </td>
	    </tr>
</table>
   </fieldset>
    <input type="submit" name="bConnecter" value="Se Connecter" /> 
    <input type="submit" name="bnouveau" value="Nouveau Compte" />
   </div>
 </form> 
 </body>
</html>