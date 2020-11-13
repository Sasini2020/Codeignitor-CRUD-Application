<?php 
    class Crudmodel extends CI_Model{

        public function getRecords(){
            $query = $this->db->get('user');
            return $query->result(); 
        }

        public function saveRecords($data){
            return $this->db->insert('user',$data);
        }

        public function getAllRecords($record_id){
            $query = $this->db->get_where('user',array('id'=> $record_id));
            if($query->num_rows()>0){
                return $query->row();
            }
        }
        public function updateRecords($record_id,$data){
           return $this->db->where('id',$record_id)
           ->update('user',$data);
        }

        public function deleteRecord($record_id){
            return $this->db->delete('user',array('id'=>$record_id));
        }
    }

?>