<?php if (! defined ('BASEPATH')) exit ('No direct script access allowed');
   
    class User_models extends CI_Model
    {
        public function inscription($nom,$email,$mot_de_passe)
    { 
        $ad=false;
        $sql ="insert into utilisateurs (nom,email,mot_de_passe) values('%s','%s','%s','%s')";
        $sql = sprintf($sql,$this->db->escape($nom),$this->db->escape($email),$this->db->escape($mot_de_passe),$this->db->escape($ad));
        $this->db->query($sql);
        echo $this->db->affected_rows(); 
    }  
      
        


    }

?>