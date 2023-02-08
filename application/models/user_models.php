<?php
     if (! defined('BASEPATH')) exit ('NO DIRECT SCRIPT ACCESS ALLOWED');
     class User_models extends CI_Model { 
            public function loginutilisateur($email,$password){
                $request = 'SELECT id FROM utilisateurs WHERE email =%s and mot_de_passe = %s';
                $request = sprintf($request,$this->db->escape($email),$this->db->escape($password));
                echo $request;
                $query = $this->db->query($request);
                $result = $query->row_array();
                $id=$result['id'];
                return $id;
            }
            public function isAdmin($id){
                $request = 'SELECT is_admin FROM utilisateurs WHERE id =%d';
                $request = sprintf($request,$id);
                echo $request;
                $query = $this->db->query($request);
                $result = $query->row_array();
                $id=$result['is_admin'];
                return $id;
            }
    }
?>