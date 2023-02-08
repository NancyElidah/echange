<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('templates/header');
    $this->load->view('templates/liste',$objet);
    $this->load->view('templates/footer');
?>