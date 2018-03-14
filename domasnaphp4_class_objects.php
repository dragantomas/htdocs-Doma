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

echo '<hr/>';

// KLASA 2

class Ovosje {

	private $boja;
	private $vkus;
	private $golemina;
	private $cvrstina;
	private $poteklo;

	public function __construct($b, $v, $g, $c, $p){
		$this->setBoja = $b;
		$this->setVkus = $v;
		$this->setGolemina = $g;
		$this->setCvrstina =$c;
		$this->setPoteklo = $p;
	}

	public function setBoja($b) {
		$boi = ['crvena', 'zelena', 'zolta', 'oker', 'portokalova'];
		if(in_array($b, $boi)) {
			$this->boja = $b;
		}
	}

	public function getBoja(){
		return $this->boja;
	}

	public function setVkus($v) {
		$vkusovi = ['sladok', 'gorcliv', 'kisel'];
		if(in_array($v, $vkusovi)) {
			$this->vkus = $v;
		}
	}

	public function getVkus(){
		return $this->vkus;
	}

	public function setGolemina($g) {
		$golemini = ['mala', 'sredna', 'golema', 'najgolema'];
		if(in_array($g, $golemini)) {
			$this->golemina = $g;
		}
	}

	public function getGolemina(){
		return $this->golemina;
	}

	public function setCvrstina($c) {
		$cvrstini = ['cvrsto', 'meko'];
		if(in_array($b, $cvrstini)) {
			$this->cvrstina = $c;
		}
	}

	public function getCvrstina(){
		return $this->cvrstina;
	}

	public function setPoteklo($p) {
		$potekla = ['Makedonija', 'Grcija', 'Bugarija', 'Srbija', 'Albanija'];
		if(in_array($p, $potekla)) {
			$this->poteklo = $p;
		}
	}

	public function getPoteklo(){
		return $this->poteklo;
	}

	public function opis(){
		echo 'Ovosjeto e so '.$this->boja.' boja, ima '.$this->vkus.' vkus, ima '.$this->golemina.' masa i e '.$this->cvrstina.', so poteklo e od '.$this->poteklo.'.';
	}

}

$ovosje1 = new Ovosje('crvena', 'sladok', 'mala', 'meko', 'Makedonija');

echo '<br/><hr/>';

print_r($ovosje1);

echo '<br/><hr/>';

$ovosje1->opis();

echo '<br/><hr/>';


// KLASA 3

class Kalkulator {

	private $broj1;
	private $broj2;

	public function __construct($broj1, $broj2) {
		$this->broj1 = $broj1;
		$this->broj2 = $broj2;
	}

	public function broevi() {
		echo 'Broevite se '.$this->broj1.' i '.$this->broj2;
	}

	public function dodadi() {
		return $this->broj1 + $this->broj2;
	}

	public function odzemi() {
		return $this->broj1 - $this->broj2;
	}
	
	public function pomnozi() {
		return $this->broj1 * $this->broj2;
	}
	
	public function podeli() {
		return $this->broj1 / $this->broj2;
	}

}

$kalkulator1 = new Kalkulator(10, 7);

echo '<br/><hr/>';

print_r($kalkulator1);

echo '<br/><hr/>';

echo $kalkulator1->broevi();

echo '<br/><hr/>';

echo $kalkulator1->dodadi();

echo '<br/><hr/>';

echo $kalkulator1->odzemi();

echo '<br/><hr/>';

echo $kalkulator1->pomnozi();

echo '<br/><hr/>';

echo $kalkulator1->podeli();


 ?>