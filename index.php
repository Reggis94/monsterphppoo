<?php

require("autoload.php");
$joueur = new Joueur(150);

while($joueur->GetEstVivant())
{
	$rand = rand(0, 50);
	if($rand < 35)
	{
		$monstre = new MonstreFacile();
		echo "GENERATION MONSTRE FACILE";
	}
	else
	{
		$monstre = new MonstreDifficile();
		echo "GENERATION MONSTRE DIFFICILE";
	}
	
	while($joueur->GetEstVivant() AND $monstre->GetEstVivant())
	{
		$joueur->Attaque($monstre);
		if($monstre->GetEstVivant() == true)
		{
			$monstre->Attaque($joueur);
		}
	}
}


?>