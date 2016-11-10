<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class eventos_model extends CI_Model{
     public function __construct() {
         parent::__construct();
     }
     
     public function listar_evento() {
         $this->db->select("(SELECT count(*) FROM agenda WHERE evento, descricao_evento, data_evento");
         $this->db->from('agenda');
         return $this->db->result();
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

