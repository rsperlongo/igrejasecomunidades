<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Igrejas_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        
    }
    
    public function busca($buscar) {
        $this->input->post('buscar');
        $this->db->select('*');
        $this->db->like('denominacao_ID', $buscar);
        $this->db->or_like('cidades_ID', $buscar);
        return $this->db->get('igrejas')->result();
    }
    
    public function contar(){
            return $this->db->count_all('igrejas');
	}
    
    public function editar($igrejas){
                $this->db->where('id',$id);
		$this->db->where('md5(id)',$igrejas);
		return $this->db->get('igrejas')->result();
	}
    
    public function listar($pular=null,$igrejas_por_pagina=null){
		$this->db->select('igrejas.denominacao_ID as denominacao,nome.id,igrejas.cidade_ID as cidades,igrejas.estado,igrejas.cidade,igrejas.cep, igrejas.rua, igrejas.responsavel');
		$this->db->from('igrejas'); 
		$this->db->group_by('nome.id');
		$this->db->order_by('denominacao.id','ASC');
		if($pular && $igrejas_por_pagina_por_pagina){
			$this->db->limit($igrejas_por_pagina,$pular);
		}
		else{
			$this->db->limit(5);
		}
		return $this->db->get()->result();
	}
    
    public function salvar_alteracao($id,$denominacao,$nome,$cep,$rua,$bairro,$cidade,$estado,$telefone,$responsavel,$email,$twitter,$facebook,$site,$segunda,$terca,$quarta,$quinta,$sexta,$sabado,$domingo){
		$dados['denominacao'] = $denominacao;
		$dados['nome'] = $nome;
		$dados['cep'] = $cep;
		$dados['rua'] = $rua;
		$dados['bairro'] = $bairro;
		$dados['cidade'] = $cidade;
		$dados['estado'] = $estado;
		$dados['telefone'] = $telefone;
		$dados['responsavel'] = $responsavel;
		$dados['email'] = $email;
		$dados['twitter'] = $twitter;
		$dados['facebook'] = $facebook;
		$dados['site'] = $site;
		$dados['segunda'] = $segunda;
		$dados['terca'] = $terca;   
                $dados['quarta'] = $quarta; 
                $dados['quinta'] = $quinta; 
                $dados['sexta'] = $sexta; 
                $dados['sabado'] = $sabado; 
                $dados['domingo'] = $domingo; 
		$this->db->query("INSERT INTO igrejas SELECT * FROM igrejas WHERE md5(id) = '".$this->input->post('id')."'");
		$this->db->where('md5(id)',$this->input->post('id'));
		return $this->db->update('igrejas',$dados);
	}
    
    
}

