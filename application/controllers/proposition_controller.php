<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Login_controller extends CI_Controller{
        public function __construct(){
          parent::__construct();
          $this->load->library('session');
        }
        public function getValue(){
            $data1 = $this->input->get('objet2'); 
            $data2 = $this->input->get('user2'); 
            $data = array();
            $data['info'][0]=$data1;
            $data['info'][1]=$data2;

            $this->load->model('objet_models');
            $user = $this->session->userdata('id');
            $ob['myObjet'] = $this->objet_models->getMyObjet($user);
            if (count($ob)!=0) $this->load->view('templates/proposition',$data,$ob);
            else echo "Null object ";

        }
        public function add(){
            $objet1 = $this->input->post('objet1');
            $objet2=$this->input->post('objet2');
            $user1=$this->session->userdata('id');
            $user2=$this->input->post('user2');
            $qte1= $this->input->post('qte1');
            $qte2=$this->input->post('qte2');
            $date=$this->input->post('date');

            if ($this->input->post('objet1')=="" || $this->input->post('user2')=="" || $this->input->post('objet2')=="" || $this->input->post('qte2') ==""|| $this->input->post('qte1')=="" || $this->session->has_userdata('user')==false){
                redirect('templates/listeObjet');
            }else{
                $this->load->model('proposition_models');
                $this->proposition_models->add_proposition($objet1,$objet2,$qte1,$qte2,$user1,$user2,$date);
                $this->load->view('templates/listeObjet');
            }
	    }
    }
?>