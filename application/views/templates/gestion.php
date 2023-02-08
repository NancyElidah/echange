<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('templates/headerAdmin');
    $this->load->view('templates/gestionCategories',$value);
    $this->load->view('templates/footer');
?>