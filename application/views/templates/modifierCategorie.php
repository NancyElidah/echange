<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('templates/header');
    $this->load->view('templates/modifCategories',$id);
    $this->load->view('templates/footer');

?>