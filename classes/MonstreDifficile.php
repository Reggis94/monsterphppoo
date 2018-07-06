<?php 
class MonstreDifficile extends MonstreFacile {

	const DEGATSSORT = 5;
	

	public function __construct ()
	{
		parent::__construct();
		$this->estVivant = true;
	}

	public function Attaque($joueur)
	{
		//$this::Attaque($joueur);
		$lanceMonstre = $this->LanceLeDe();
		$lanceJoueur = $joueur->LanceLeDe();
		if($lanceMonstre > $lanceJoueur)
		{
			$joueur->SubitDegats($degats);
		}
	}

	public function SortMagique()
	{
		$valeur = $de->LanceLeDe();
		if($valeur == 6)
		{
			return 0;
		}
		return DEGATSSORT * $valeur;
	}
}