<?php 

// Klasa 1 so construct

class Velosiped {

	private $proizvoditel;
	private $tip;
	private $goleminaNaTrkala;
	private $groupset;
	private $godina;

	public function __construct($p, $t, $g, $gs, $gd){
		$this->setProizvoditel = $p;
		$this->setTip = $t;
		$this->setGoleminaNaTrkala = $g;
		$this->setGroupset =$gs;
		$this->setGodina = $gd;
	}

	public function setProizvoditel($p){
		return $this->proizvoditel;
	}

	public function setTip($t){
		return $this->tip;
	}

	public function setGoleminaNaTrkala($g){
		return $this->goleminaNaTrkala;
	}

	public function setGroupset($gs){
		return $this->groupset;
		}

	public function setGodina($gd){
		return $this->godina;
		}

	public function IzbranVelosiped() {
		echo 'Izbraniot velosiped e od proizvoditelot '.$this->setProizvoditel.' od tipot '.$this->setTip.' so golemina na trkala od '.$this->setGoleminaNaTrkala.', so '.$this->setGroupset.' proizveden vo '.$this->setGodina.'.';
	}
}

$v = new Velosiped('Scott', 'road bike', '700C', 'Shimano 105', '2017');

$v->IzbranVelosiped();

// KLASA 2





 ?>