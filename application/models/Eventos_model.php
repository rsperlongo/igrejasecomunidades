<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Eventos_model extends CI_Model{
     public function __construct() {
         parent::__construct();
         $this->load->model('Igrejas_model', 'igrejas');
     }
     
     public function listar_evento($id = NULL) {
         $this->db->where('ID', $id);
         $query = $this->db->query("(SELECT count(*) FROM agenda as igrejas_ID WHERE evento, descricao_evento, data_evento, foto");
         return $query->result();
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

