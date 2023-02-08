<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Categories_controller extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('session');
            $this->load->model('categories_models');
        }

        public function modifyCategories(){
            $nom = $this->input->post('nom');
            if ($this->input->post('nom') == ""){
                $this->load->view('templates/');
            }else{
               $this->categories_models->modify_categories($nom);
               $this->load->view('templates/listecategories');
            }
	    }
        public function insertCategories (){
            $nom = $this->input->post('nom');
            if ($this->input->post('nom') == ""){
                $this->load->view('templates/');
            }else{
               $this->categories_models->add_categories($nom);
               $this->load->view('templates/listecategories');
            }
        }
        public function deleteCategories(){
            $id=$this->input->post('id');
            $this->categories_models->delete_categories($id);
            $this->load->view('templates/listecategories');
        }
    }
?>