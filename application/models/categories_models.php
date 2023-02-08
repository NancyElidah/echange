<?php
     if (! defined('BASEPATH')) exit ('NO DIRECT SCRIPT ACCESS ALLOWED');
     class Categories_models extends CI_Model { 
        public function modify_categorie($nom , $id){
            $request = 'UPDATE categories SET 
                                nom = %s
                       where id = %s';
            $request = sprintf($request,$this->db->escape($nom),$this->db->escape($id));
            $this->db->query($request);
       }
       public function add_categoriemodify_categorie($nom , $qte , $price , $user , $categorie){
            $request = "INSERT INTO categories values (null,'%s') ";
            $request = sprintf($request,$this->db->escape($nom));
            $this->db->query($request);
       }
       public function delete_categoriemodify_categorie($id){
            $request = 'DELETE FROM categories where id = %s';
            $request = sprintf($request,$this->db->escape($id));
            $this->db->query($request);
       }
       /*get all categories*/
        public function getAllCategories() {
            $sql = "SELECT * FROM categories";
            $query = $this -> db -> query($sql);
            foreach ($query -> result_array() as $row ){
                $result[] = $row;
            }
            return $result;
        }
        public function getIdObjetParCategorie($categorie , $monId) {
            $sql = "SELECT id *FROM objets WHERE id_categories=%s AND id_utilisateurs!=%s";
            $sql = sprintf($sql, $categorie, $monId);
            $objet = $this -> db -> query($sql);
            $objets = $objet -> row_array();
            
            return $objets;
       }
     }
?>