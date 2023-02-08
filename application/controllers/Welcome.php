<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index00
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		
	}	
	public function test()
	{
		echo "test";
		
	}
	public function bonjour($pseudo = '')
	{
		echo "Salut à toi " . $pseudo ."</br>";
		
	}	
	public function manger ($plat = '', $boisson = ''){
		// $plat = "Steak fritte salade";
		// $boisson = "coca";
		echo "Voici votre menu : </br>";
		echo  $plat . "</br>";
		echo  $boisson . "</br>";
		echo  "bon appetit !";


	}
}
