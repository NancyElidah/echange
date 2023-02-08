<?php
     if (! defined('BASEPATH')) exit ('NO DIRECT SCRIPT ACCESS ALLOWED');
     class Proposition_models extends CI_Model { 
          public function add_proposition($ojet1, $objet2,$qte1,$qte2,$user1,$user2,$date){
            $request = "INSERT INTO propositions values (null,'%s','%s','%s','%s','%s','%s','%s') ";
            $request = sprintf($request,$this->db->escape($objet1),
                                        $this->db->escape($qte1),                                       
                                        $this->db->escape($objet2),
                                        $this->db->escape($qte2),
                                        $this->db->escape($user1),
                                        $this->db->escape($user2),
                                        $this->db->escape($date)
                                );
            $this->db->query($request);
          }
          /*accepter les propositions */
          public function accepter($id_propositions) {
               $date = $this -> db -> query('SELECT CURRENT_TIMESTAMP as dateactuel');
               $row = $date -> row_array();
     
               $sql = "INSERT INTO acceptations VALUES(default, %s, '%s')";
               $sql = sprintf($sql, $id_propositions, $row['dateactuel']);
               $this -> db -> query($sql);
          }
          /*refuser les propositions */
          public function refuser($id_propositions) {
               $date = $this -> db -> query('SELECT CURRENT_TIMESTAMP as dateactuel');
               $row = $date -> row_array();

               $sql = "INSERT INTO refus VALUES(default, %s, '%s')";
               $sql = sprintf($sql, $id_propositions, $row['dateactuel']);
               $this -> db -> query($sql);
          }

           /**listes propositions des autres utilisateurs*/
          public function listePropositions($idUtilisateurs) {
               $sql = "SELECT * FROM propostions WHERE id_utilisateurs2=%s AND id NOT IN (SELECT id_propostions FROM propositions ) AND id NOT IN (SELECT id_propostions FROM refus)";
               $liste = sprintf($sql, $idUtilisateurs);
               $query = $this -> db -> query($sql);
               foreach ($query -> result_array() as $row ){
                    $result[] = $row;
                }
                return $result;
          }
          
           /**listes mes propositions */
          public function listePropositions($idUtilisateurs) {
               $sql = "SELECT * FROM propostions WHERE id_utilisateurs1=%s AND id NOT IN (SELECT id_propostions FROM propositions ) AND id NOT IN (SELECT id_propostions FROM refus)";
               $liste = sprintf($sql, $idUtilisateurs);
               $query = $this -> db -> query($sql);
               foreach ($query -> result_array() as $row ){
                    $result[] = $row;
                }
                return $result;
          }
     }
?>