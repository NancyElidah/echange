<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Categories_controller extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('session');
            $this->load->model('categories_models');
        }
        public function index($id){
            $value['id']=$id;
            $this->load->view('templates/modifierCategorie',$value);
        }
        public function ajoutPlace(){
            $this->load->view('templates/ajoutCat');
        }
        public function modifyCategories(){
            if ($this->input->post('nom') == ""){
                echo "veuillez remplir";
                $this->load->view('templates/modifierCategorie');
            }else{
                $nom = $this->input->post('nom');
                $id = $this->input->post('id');
               $this->categories_models->modify_categorie($nom,$id);
               $this->load->model('categories_models');
                    $data=array();
                    $data['value'] = $this->categories_models->getAllCategories();
               $this->load->view('templates/gestion',$data);
            }
	    }
        public function insertCategories (){
            $nom = $this->input->post('nom');
            if ($this->input->post('nom') == ""){
                $this->load->view('templates/ajoutCat');
            }else{
               $this->categories_models->add_categorie($nom);
               $this->load->model('categories_models');
                    $data=array();
                    $data['value'] = $this->categories_models->getAllCategories();
               $this->load->view('templates/gestion',$data);
            }
        }
        public function deleteCategories(){
            $id=$this->input->post('id');
            $this->categories_models->delete_categories($id);
            $this->load->view('templates/listecategories');
        }
       public function control_cat(){
         $data=array(); 
         $data['categorie']=$this->Categories_models->getAllCategories();
         if (count($data)!=0) $this->load->view('templates/loginRecherche',$data);
         else echo "categories null";
       }
    }
?>