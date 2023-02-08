<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('templates/header');
    $this->load->view('templates/loginSearch',$categorie);
    $this->load->view('templates/footer');

?>