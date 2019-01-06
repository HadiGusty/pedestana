<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('model');
	$this->load->helper('url');
}
	
	public function index()
	{
		$this->load->view('index');
	}

	/*_____________________ mulai bagian login-login _________________________*/
	public function login()
	{
		$this->load->view('tampilanlogin');
	}
	/*------------------------------------*/
	public function masukbnpb()
	{
		$this->load->view('loginbnpb');
	}
	public function masukfasilitator()
	{
		$this->load->view('loginfasilitator');
	}
	public function masukmasyarakat()
	{
		$this->load->view('loginmasyarakat');
	}
	public function masukadmin()
	{
		$this->load->view('loginadmin');
	}

	/*------------------------------------*/
	public function keluar()
	{
		$this->load->view('tampilanlogin');
	}
	/*------------------------------*/
	
	/*_______________________ selesai bagian login-login _________________________*/

	



	/*_______________________ mulai masuk dashboard-dashboard _________________________*/
	
	public function admindashboard()
	{
		$this->load->view('dashadmin');
	}

	public function bnpbdashboard()
	{
		$this->load->view('dashbnpb');
	}
	public function fasilitatordashboard()
	{
		$this->load->view('dashfasilitator');
	}
	public function masyarakatdashboard()
	{
		$this->load->view('dashmasyarakat');
	}
	
	/*...link antar sidebar dashboard admin...*/
	public function homeadmin()
	{
		$this->load->view('dashadmin');
	}
	public function daftarbnpb()
	{
		$this->load->view('daftarBNPB');
	}
	public function daftarfasilitator()
	{
		$this->load->view('daftarFasilitator');
	}
	public function formbnpb()
	{
		$this->load->view('formBNPB');
	}
	public function formfasilitator()
	{
		$this->load->view('formFasilitator');
	}
	public function daftardesa()
	{
		$this->load->view('daftarDesa');
	}
	public function isiformindikator()
	{
		$this->load->view('isiFormIndikator');
	}

	/*...link antar sidebar dashboard bnpb...*/
	public function homebnpb()
	{
		$this->load->view('dashbnpb');
	}
	public function lihatlaporan()
	{
		$this->load->view('lihatLaporan');
	}
	public function evaluasilaporan()
	{
		$this->load->view('evaluasiLaporan');
	}
	public function mengkategorilaporan()
	{
		$this->load->view('mengkategoriLaporan');
	}
	public function perkembangandesa()
	{
		$this->load->view('perkembanganDesa');
	}
	public function memberiindikator()
	{
		$this->load->view('memberiIndikator');
	}
	public function aksilihat()
	{
		$this->load->view('aksiLihat');
	}

	/*...link antar sidebar dashboard fasilitator...*/
	public function homefasilitator()
	{
		$this->load->view('dashfasilittor');
	}
	public function daftarkandesa()
	{
		$this->load->view('daftarkanDesa');
	}

	/*...link antar sidebar portal masyarakat...*/
	public function homemasyarakat()
	{
		$this->load->view('dashmasyarakat');
	}
	public function portalmasyarakat()
	{
		$this->load->view('portalMasyarakat');
	}













	/*public function adminpassword()
	{
		$password=($this->input->post('password',TRUE),ENT_QUOTES);

		$cek_admin= $this->Welcome->chekadmin($password);
		if ($cek_admin->num_rows() > 0){
			
		}
		else {
			$this->load->view('dashadmin');
		}



		$checpassword = $this->input->post("passadmin");
		foreach ('admin' as $key) {
			if ($pass = $key->password){
				return $this->load->view('dashadmin');
			}
		}
	}*/
	/*_______________________ mulai masuk dashboard-dashboard _________________________*/









}
