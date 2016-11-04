<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Igrejas_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        
    }
    
    public function listar($filtro = NULL) {
        $this->db->select("SELECT count(*) FROM igrejas WHERE nome,telefones,email,rua,responsavel,cep*");
        $this->db->from('igrejas');
        $tthis->db->order_by('ASC');
        $this->db->get('igrejas')->result();
                
    }
    
    public function editar($igrejas){
                $this->db->where('id',$id);
		$this->db->where('md5(id)',$igrejas);
		return $this->db->get('igrejas')->result();
	}
    
    public function salvar_alteracao($id,$denominacao,$nome,$cep,$rua,$bairro,$cidade,$estado,$numero,$telefone,$responsavel,$email,$twitter,$facebook,$site,$segunda,$terca,$quarta,$quinta,$sexta,$sabado,$domingo){
		$dados['denominacao'] = $denominacao;
		$dados['nome'] = $nome;
		$dados['cep'] = $cep;
		$dados['rua'] = $rua;
		$dados['bairro'] = $bairro;
		$dados['cidade'] = $cidade;
		$dados['estado'] = $estado;
		$dados['numero'] = $numero;
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

