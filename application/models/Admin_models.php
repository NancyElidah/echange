<?php if (! defined ('BASEPATH')) exit ('No direct script access allowed');
   
    class Admin_models extends CI_Model
    {
        public function nbrUtilisateurInscrit() 
        {  
            $sql='SELECT COUNT(id) nbr From utilisateurs WHERE is_admin=false ';
            $query = $this -> db ->query($sql);
            // echo $sql;
            $nombre =$query ->row_array();
            $nbr=$nombre['nbr'];
            return $nbr;
       
        } 
        public function nbrEchangeEffectue()
        { 
            $sql="select count(id) nbr  from acceptations ";
            $query = $this -> db ->query($sql);
            // echo $sql;
            $nbr =$query -> row_array();
            $nombre = $nbr['nbr'];
            // echo $nombre;
            return $nombre;
        }  
        
    }

?>