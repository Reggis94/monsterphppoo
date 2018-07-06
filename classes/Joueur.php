<?php 
class Joueur {

	private $de;
	private $ptsDeVies;

	public function __construct ($points)
	{
		$this->ptsDeVies = $points;
		$this->de = new De();
	}

	public function GetPtsDeVies()
	{
		return $this->ptsDeVies;
	}

	public function GetEstVivant()
	{
		if($this->ptsDeVies > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function LanceLeDe()
	{
		return $this->de->LanceLeDe();
	}

	public function Attaque($monstre)
	{
		$lanceJoueur = $this->LanceLeDe();
		
		$lanceMonstre = $monstre->LanceLeDe();
		if($lanceJoueur >= $lanceMonstre)
		{
			$monstre->SubitDegats();
		}
		echo "La propriété du monstre EstEnVies est:";
		var_dump($monstre->GetEstVivant());
		echo "Il reste au joueur ".$this->ptsDeVies."<br>";
	}

	public function SubitDegats($degats)
	{
		if($this->BouclierFonctionne() <= 2)
		{
			$this->ptsDeVies = $this->ptsDeVies - $degats;
			echo "Le BOUCLIER n'a pas fonctionné";
		}
	}

	public function BouclierFonctionne()
	{
		return $this->de->LanceLeDe();
	}

}