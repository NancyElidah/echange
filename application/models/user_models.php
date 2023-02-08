<?php
     if (! defined('BASEPATH')) exit ('NO DIRECT SCRIPT ACCESS ALLOWED');
     class User_models extends CI_Model { 
        public function loginUtilisateur($email, $password) {
            $utilisateurs = $this -> db -> query("SELECT id FROM utilisateurs WHERE email='%s' AND mot_de_passe='%s'");
            $utilisateurs = sprintf($utilisateurs, $email, $password);
            $row = $utilisateurs -> row_array();
            return $row;
       } 
    }
?>