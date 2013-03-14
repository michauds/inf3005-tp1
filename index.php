<!DOCTYPE html>
<html lang="fr-ca">
	<head>
		<meta charset="UTF-8">
		<title>untitled</title>
		<meta name="viewport" content="width=device-width" /> 
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link href='http://fonts.googleapis.com/css?family=Gravitas+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Geo' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="scripts/main.js"></script>
		<!--[if lt IE 9]>
					<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	
	<body>
		
		<div class="mod-wrapper">
			<header class="mod-header">
					<h1 class="typo-main-title">L'Usine à T-Shirt </h1>
			</header>
			<div class="mod-content">
				<figure class="mod-tshirt mod-col1">
					<figcaption class="typo-h1">Vue du modèle de chandail</figcaption>
					<div id="color" style="width: 300px; height: 300px; background-color: #000000;"></div>
					<!-- img src="img_pulpit.jpg" alt="The Pulpit Rock" width="304" height="228" -->
				</figure>
				<article class="mod-col2">
					<h1 class="typo-h1">Caractéristiques du t-shirt</h1>
					<form action="" method="post">
						<fieldset>
							<legend class="typo-h2">Choix de la couleur</legend>
							<!-- input type="text" id="color" name="color" value="#000000" / -->
							<div>
								<div class="s-row">
									<label for="taille">Grandeur</label>
									<select id="taille">
											<option value="petit">Petit</option>
											<option value="moyen">Moyen</option>
											<option value="large">Large</option>
											<option value="xlarge">Extra-Large</option>
									<select>
								</div>
								<div class="s-row">
										<label for="texte">Personnaliser le texte</label>
										<textarea>
										</textarea>
								</div>
								<div class="s-row">
										<label for="texte">Taille de la police de caractère</label>
										<input type="range" min="1" max="10" />
								</div>
								<fieldset class="s-row">
									<legend>Choix de la police</legend>
									<label for="verdana">Verdana</label>
									<input type="radio" name="police" id="verdana" checked="checked" />
									<label for="Geo">Geo</label>
									<input type="radio" name="police"  id="Geo" />
									<label for="LibreBaskerville">Libre Baskerville</label>
									<input type="radio" name="police" id="LibreBaskerville'"/>
								</fieldset>
								<div class="s-row">
									<input type="number" placeholder="Quantité" />
								</div>
								<fieldset class="s-row">
									<legend>Choix de tissu</legend>
									<label for="cotton">Cotton</label>
									<input type="radio" name="tissu" id="cotton" checked="checked" />
									<label for="coton-polyester">coton-polyester</label>
									<input type="radio" name="tissu"  id="coton-polyester" />
									<label for="polyester">polyester</label>
									<input type="radio" name="tissu" id="polyester"/>
								</fieldset>
								<fieldset>
									<legend>Informations personnelles</legend>
									<div class="s-row">
										<input type="text" placeholder="Prenom" />
									</div>
									<div class="s-row">
										<input type="text" placeholder="Nom" />
									</div>
									<div class="s-row">
										<input type="text" placeholder="Numero de téléphone" />
									</div>
									<div class="s-row">
										<input type="text" placeholder="Courriel" />
									</div>
									<div class="s-row">
										<input type="text" placeholder="Adresse" />
									</div>
									<input type="submit" value="Ajouter au panier" />
								</fieldset>
							</div>
						</fieldset>
					</form>
					 <div id="colorpicker"></div>
				</article>
			</div>
			<?php
				$change;
				$deuxieeTest;
				$test = "aa";
		
				?>
		</div>
	</body>
</html>
