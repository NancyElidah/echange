<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Statistiques_controller extends CI_Controller{
        public function __construct(){
          parent::__construct();
          $this->load->model('Admin_models');
        }
        public function index(){
            $this->load->view('templates/login');
        }
        public function getStat(){
            $data=array();
            $value_ins['ins']=$this->Admin_models->nbrUtilisateurInscrit() ;
            $value_echange['echange']=$this->Admin_models->nbrEchangeEffectue();
            $data['ins']=$value_ins['ins'];
            $data['echange']=$value_echange['echange'];
            $this->load->view('templates/stat',$data);
        }
    }
?>