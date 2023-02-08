<?php
     if (! defined('BASEPATH')) exit ('NO DIRECT SCRIPT ACCESS ALLOWED');
     class Objet_models extends CI_Model { 
          public function modify_objet($nom , $qte , $price , $user , $categorie ,$desc, $id){
               $request = 'UPDATE objets SET 
                                   nom = %s , quantites = %s , 
                                   prix = %s , 
                                   id_utilisateurs=%s
                                   ,id_categories=%s ,
                                   descriptions=%s
                          where id = %d';
               $request = sprintf($request,$this->db->escape($nom),
                                        $this->db->escape($qte),
                                        $this->db->escape($price),
                                        $this->db->escape($user),
                                        $this->db->escape($categorie),
                                        $this->db->escape($desc),
                                        $id
                              );
               $this->db->query($request);
          }
          public function add_objet($nom , $qte , $desc,$price , $user , $categorie){
               $request = "INSERT INTO objets values (null,%s,%d,%s,%d,%d,%d) ";
               $request = sprintf($request,$this->db->escape($nom),$qte,$this->db->escape($desc),$price,$user,$categorie );                                  echo $request;
               echo $request;
               $this->db->query($request);
          }
          public function delete_objet($id){
               $request = 'DELETE FROM objets where id = %s';
               $request = sprintf($request,$this->db->escape($id));
               $this->db->query($request);
          }
          public function getListOfObjet($id){
               $request = 'SELECT o.* , i.nom_images images FROM objets o join objets_images i 
               on i.id_objets = o.id 
               where id_utilisateurs != %d ';
               echo $id ; 
               $request = $request = sprintf($request,$id);
               echo $request;
               $query = $this->db->query($request);
               $result = array();
               foreach ($query -> result_array() as $row ){
                   $result[] = $row;
               }
               return $result;
          }
          public function getOneObjet($id){
               $request = 'SELECT id_categories FROM objets where id=%d';
                $request = sprintf($request,$id);
               $query = $this->db->query($request);
               $result = $query->row_array();
               $value = $result['id_categories'];
               return $value;
          }
          public function getMyObjet($id){
               $request = 'SELECT * FROM objets where id_utilisateurs = %d  ';
                $request = sprintf($request,$id);
               $query = $this->db->query($request);
               $result = array();
               foreach ($query -> result_array() as $row ){
                    $result[] = $row;
               }
                return $result;
          }
          public function getResponseRecherche($motCle,$id){
               $request = 'SELECT * From objets where nom like  "%'.$motCle.'%" and id_categories=%d';
               $request = sprintf($request,$id);
               $query = $this->db->query($request);
               foreach ($query -> result_array() as $row ){
                    $result[] = $row;
               }
                return $result;
          }
     }
?>