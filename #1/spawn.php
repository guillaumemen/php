<?php
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=fortnite', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>TP Spawn</title>
		
		
	</head>
	<body>
		
		<div class="center-div">
		  <form action="spawn.php" method="post" accept-charset="utf-8">
		  	<button class="btn btn-primary" name="submit" type="submit">Spawn</button>
			<?php
				if (isset($_POST['submit']))
				{
					$get = $bdd->query('SELECT * FROM villes ORDER BY rand() limit 1');
					while($donnees=$get->fetch())
				{
					?>
					<p> <?php echo $donnees['nom']  ?> </p>  
					<img src="<?php echo $donnees['url']  ?>"> </p>  
				    <?php
				}
				}
			?>
		  </form>
		  <div class="navbar-nav">
		      <a class="nav-item nav-link active" href="editionprofil.php">admin</a>
		    </div>
		  </div>
		</nav>
		</div>
	</body>

</html>