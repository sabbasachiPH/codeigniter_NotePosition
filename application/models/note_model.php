<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class note_model extends CI_Model{
        public function note_getall()
        {
            $sql = $this->db->get('notePosition');
            print_r($sql);
            return $sql->result();
        }
        public function insert_allNote($table,$data)
        {
            $this->db->insert($table,$data);
            
        }
    }


?>