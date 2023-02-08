<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('templates/headerAdmin');
    $this->load->view('templates/statistique',$ins,$echange);
    $this->load->view('templates/footer');
?>