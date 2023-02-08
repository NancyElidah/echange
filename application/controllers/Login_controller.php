<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Login_controller extends CI_Controller{

        public function __construct(){
          parent::__construct();
          $this->load->library('session');
        }
        public function index(){
            $this->load->view('templates/login');
        }
        public function login(){
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            if ($this->input->post('email')=="" || $this->input->post('pass')==""){
                 $this->load->view('templates/login');
            }else{
                $this->load->model('user_models');
                $user = $this->user_models->loginUtilisateur($email,$pass);
                $this->session->set_userdata('id',$user);
                $admin = $this->user_models->isAdmin($this->session->userdata('id'));
                 if ($admin==0)$this->load->view('templates/accueil');
                 else {
                    $this->load->model('categories_models');
                    $data=array();
                    $data['value'] = $this->categories_models->getAllCategories();
                    $this->load->view('templates/gestion',$data);
                 }
            }
	    }
    }
?>