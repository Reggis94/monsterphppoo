<?php 
class MonstreFacile {

	const DEGATS = 10;
	protected $de;
	protected $estVivant;

	public function __construct ()
	{
		$this->estVivant = true;
		$this->de = new De();
	}

	public function LanceLeDe()
	{
		return $this->de->LanceLeDe();
	}

	public function GetEstVivant()
	{
		return $this->estVivant;
	}


	public function Attaque($joueur)
	{
		$lanceMonstre = $this->LanceLeDe();


		$lanceJoueur = $joueur->LanceLeDe();
		if($lanceMonstre > $lanceJoueur)
		{
			$MonstreFacile = new MonstreFacile();
			$joueur->SubitDegats($MonstreFacile::DEGATS);
		}
		echo "Le joueur a attaqué le monstre<br>";
		echo "Le joueur a ".$joueur->GetPtsDeVies()." restant <br>";
	}

	public function SubitDegats()
	{
		$this->estVivant = false;
	}
}