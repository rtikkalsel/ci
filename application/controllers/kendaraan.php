<?php 
class Kendaraan extends CI_Controller{
	public function Kendaraan(){
		parent::__construct();
	}
	public function index(){
		echo 'Class Kendaraan';
	}

	public function roda_empat(){
		echo 'ini adalah function roda empat';
	}
	public function roda_dua(){
		echo 'ini adalah function roda dua';
	}
}
?>