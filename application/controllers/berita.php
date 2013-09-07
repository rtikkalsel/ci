<?php 

class Berita extends CI_Controller
{
	
	function index()
	{
		$data['judul'] = "Berita Inyong";
		$data['headline'] = "Selamat datang di berita inyong";	
		$this->load->view('registrasi_view',$data);
	}
}
?>