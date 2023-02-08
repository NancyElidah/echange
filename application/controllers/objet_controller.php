<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Objet_controller extends CI_Controller{
        public function __construct()
        {
          parent::__construct();
          $this->load->library('session');
        }


        public function modify(){
            $this->load->model('objet_models');
            $nom = $this->input->post('nom');
            $qte = $this->input->post('quantite');
            $prix = $this->input->post('prix');
            $user = $this->session->userdata('id');
            $id = $this->input->post('id');
            $categorie = $this->objet_models->getOneObjet($user);

            if ($this->input->post('nom') == "" || $this->input->post('quantite') == "" || $this->input->post('prix') =="" || $this->session->has_userdata('user')==false){
                $this->load->view('error/modify');
            }else{
               $this->objet_models->modify_objet($nom,$qte,$prix,$user,$categorie,$id);
               $this->load->view('templates/listeObjet');
            }
	    }
        public function insert (){
            $this->load->model('objet_models');
            $nom = $this->input->post('nom');
            $qte = $this->input->post('quantite');
            $prix = $this->input->post('prix');
            $categorie = $this->input->post('categorie');

            if ($this->input->post('nom') == "" || $this->input->post('quantite') == "" || $this->input->post('prix') =="" || $this->input->post('categorie')==""){
                $this->load->view('error/insert');
            }else{
               $this->objet_models->add_objet($nom,$qte,$prix,$user,$categorie);
               $this->load->view('templates/listeObjet');
            }
        }
        public function delete(){
            $id=$this->input->post('id');
            $this->load->model('objet_models');
            $this->objet_models->delete_objet($id);
            $this->load->view('templates/listeObjet');
        }
        public function viewListObject(){
            $user = $this->session->userdata('id');
            $this->load->model('objet_models');
            $data = array();
            $data['objet'] = $this->objet_models->getListOfObjet($user);
            if (count($data)!=0) $this->load->view('templates/listeObjet',$data);
            else redirect('templates/accueil');
        }
    }
?>