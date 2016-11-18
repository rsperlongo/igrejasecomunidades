<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Eventos_model extends CI_Model{
     public function __construct() {
         parent::__construct();
         $this->load->model('Igrejas_model', 'igrejas');
     }
     
     public function get_eventos($id = NULL) {
         if($id != NULL){
         $this->db->where('id', $id);
         $query = $this->db->query("select * from agenda a JOIN igrejas i on igreja_ID = a.ID");
         return $query->result();
         }
     }
     
     public function destaques_home($quantos = 4){
        $this->db->limit($quantos);
        $this->db->order_by('id','random');
        return $this->db->get('agenda')->result();
    }
    
    public function detalhes_evento($id){
        $this->db->where('id',$id);
	$this->db->or_where('md5(id)',$id);
        return $this->db->get('agenda')->result();
    }
 }

