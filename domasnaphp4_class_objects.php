<?php 

class Velosiped {

	private $proizvoditel;
	private $tip;
	private $goleminaNaTrkala;
	private $groupset;
	private $godina;

	public function __construct($p, $t, $g, $gs, $gd){
		$this->SetProizvoditel($p);
		$this->SetTip($t);
		$this->SetGoleminaNaTrkala($g);
		$this->SetGroupset($gs);
		$this->SetGodina($gd);
	}

	public function SetProizvoditel($p){
		return $this->proizvoditel;
	}

	public function SetTip($t){
		return $this->tip;
	}

	public function SetGoleminaNaTrkala($g){
			return $this->goleminaNaTrkala;
		}

	public function SetGroupset($p){
			return $this->groupset;
		}

	public function SetProizvoditel($p){
			return $this->proizvoditel;
		}


	public function IzbranVelosiped() {
		echo "Izbran e".$this->proizvoditel.' od tipot '.$this->tip.' so golemina na trkala od '.$this->goleminaNaTrkala.', so '.$this->groupset.' proizveden vo '.$this->godina.'.';
	}
}

$v = new Velosiped('Scott', 'road bike', '700C', 'Shimano 105', '2017');

$v->IzbranVelosiped();

print_r($v);

 ?>