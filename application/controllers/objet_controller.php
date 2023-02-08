<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Objet_controller extends CI_Controller{
        public function __construct()
        {
          parent::__construct();
            $this->load->library('session');
            $this->load->model('objet_models');
        }


        public function modify(){
            $nom = $this->input->post('nom');
            $qte = $this->input->post('quantite');
            $prix = $this->input->post('prix');
            $user = $this->session->userdata('id');
            $id = $this->input->post('id');
            $desc = $this->input->post('desc');
            $categorie = $this->objet_models->getOneObjet($user);

            if ($this->input->post('nom') == "" || $this->input->post('quantite') == "" || $this->input->post('prix') =="" || $this->session->has_userdata('user')==false){
                $this->load->view('error/modify');
            }else{
               $this->objet_models->modify_objet($nom,$qte,$prix,$user,$categorie,$desc,$id);
               $this->load->view('templates/listeObjet');
            }
	    }
        public function insert (){
            if ($this->input->post('nom') == "" || $this->input->post('quantite') == "" || $this->input->post('prix') =="" || $this->input->post('categorie')==""){
                // redirect('objet_controller/ajoutPlace');
                echo $this->input->post('nom');
                echo "<br>";
                echo $this->input->post('quantite');
                echo "<br>";
                echo $this->input->post('prix');
                echo "<br>";
                echo $this->input->post('categorie');
                echo "misy null";
            }else{
                $nom = $this->input->post('nom');
                $qte = $this->input->post('quantite');
                $prix = $this->input->post('prix');
                $categorie = $this->input->post('categorie');
                $desc=$this->input->post('desc');
                $user = $this->session->userdata('id');
                $this->objet_models->add_objet($nom,$qte,$desc,$prix,$user,$categorie);
            //    $this->load->view('templates/myObject');
            }
        }
        public function delete(){
            $id=$this->input->post('id');
            $this->objet_models->delete_objet($id);
            $this->load->view('templates/listeObjet');
        }
        public function viewListObject(){
            $user = $this->session->userdata('id');
            echo $user;
            $data = array();
            $data['objet'] = $this->objet_models->getListOfObjet($user);
            if (count($data)!=0) $this->load->view('templates/listeObjet',$data);
            else redirect('templates/accueil');
        }
        public function control_research(){
            
            if ($this->input->post('motCle')=="" || $this->input->post('idCat')==""){
                redirect('templates/loginRecherche');
            }else{
                $mot = $this->input->post('motCle');
                $id = $this->input->post('idCat');
                $data = array();
                $data['search'] = $this->Objet_models->getResponseRecherche($mot,$id);
                $this->load->view('templates/recherche',$data);
            }
        }
        public function control_myObject(){
            $user=$this->session->userdata('id');
            $data=array();
            $data['value']=$this->objet_models->getMyObjet($user);
            $this->load->view('templates/myObject',$data);
        }
        public function ajoutPlace(){
            $this->load->model('categories_models');
            $data=array();
            $data['value'] = $this->categories_models->getAllCategories();
            $this->load->view('templates/ajouterObjet',$data);
        }
    }
?>