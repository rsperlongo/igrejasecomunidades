<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Cadastrar extends CI_Controller {

     function __construct() {
         parent::__construct();
         $this->load->model('igrejas_model');
         $igrejas = $this->input->post('igrejas');
    }
    
    public function index() {
      
        
        $this->load->view('cadastrar');
        
    }
    
    public function form_login() {
        
        $this->load->view('login');
    }
    
    public function cadastro() {
        
        $this->load->view('cadastro');
    }
    
    public function agenda() {
        $this->load->view('agenda');
    }
    
    public function alterarPlano() {
        $this->load->view('alterar-plano');
    }
    
    public function alterarFoto() {
        $this->load->view('alterar-foto');
    }
    
    public function cadastroPastores() {
        $this->load->view('cadastro-pastores');
    }
    
    public function adicionar() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'Nome','required|min_length[5]');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        if ($this->form_validation->run() == FALSE){
        $this->index();
        
        }
            else {
                $dados['denominacao_ID'] = $this->input->post("SELECT * FROM igreja WHERE denominacao_ID as denominacao");
                $dados['nome'] = $this->input->post('nome');
                $dados['cep'] = $this->input->post('cep');
                $dados['rua'] = $this->input->post('rua');
                $dados['bairro'] = $this->input->post('bairro');
                $dados['cidade_ID'] = $this->input->post('cidade_ID');
                $dados['cidade_ID'] = $this->input->post("SELECT * FROM igreja WHERE cidade_ID as uf");
                $dados['telefones'] = $this->input->post('telefones');
                $dados['responsavel'] = $this->input->post('responsavel');
                $dados['twitter'] = $this->input->post('twitter');
                $dados['facebook'] = $this->input->post('facebook');
                $dados['site'] = $this->input->post('site');
                $dados['email'] = $this->input->post('email');
                $dados['senha'] = $this->input->post('senha');
                
                if($this->db->insert('igrejas',$dados)){
                    echo "Dados Cadastrados com Sucesso!";
                    redirect('home');
                }
                else {
                    echo "Houve um erro ao processar seus dados";
     
                }
                
            }
    }
    
    
    public function login(){
        $this->load->library('form_validation');        
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('senha', 'Senha','required|min_length[5]');
        if ($this->form_validation->run() == FALSE){
            $this->form_login();
        }
        else{
            $email = $this->input->post('email');
            $senha = $this->input->post('senha');
            
            $this->db->where('email', $this->input->post('email'));
            $this->db->where('senha', $this->input->post('senha'));
            $data['igrejas']= $this->db->get('igrejas')->result();
            //$this->db->where('ativar',1);
            //$cliente = $this->db->get('igrejas')->result();
            //echo $this->db->last_query(); //Use a função $this->db->last_query() para verificar a última consulta executada.
            //print_r($cliente);
            //exit();      
            if(count($data['igrejas'])==1){
                $dados['nome'] = $data['igrejas'][0]->nome;
                $dados['ID'] = $data['igrejas'][0]->id;
                $dados['logado'] = TRUE;
                $this->session->set_userdata($dados);
                redirect(base_url('cadastro'));
            }
            else{
                redirect(base_url("login"));
            }
            
        }
        
    }

    public function logout() {
        $dadosSessao['igrejas'] = NULL;
        $dadosSessao['logado'] = FALSE;
        $this->session->set_userdata($dadosSessao);
        redirect(base_url("login"));   
        
    }
    
    public function alterar_cadastro($id) {
        if(null != $this->session->userdata('logado')){
            $this->db->where(md5('id'), $id);
            $this->db->where('id', $this->session->userdata('igrejas')->id);
            $this->db->where('ativar',1);
            $this->db->get('igrejas')->result();
                if(count(['igrejas'])== 1){
                    $this->load->view('cadastro');
                }
                else {
                    redirect (base_url("login"));
                }
        }
        
    }
    
    function salvar_alteracao_cadastro() {
        if(null != $this->session->userdata('logado')){
            $this->load->library('form_validation');
            $this->load->helper('form');
            $this->form_validation->set_rules('nome','required|min_lenght[5]');
            $this->form_validation->set_rules('email','required|valid_email');
            if ($this->form_validation->run() == FALSE){
		$this->cadastro($this->input->post('id'));
        }
        else {
            $dados['denominacao'] = $this->input->post('denominacao');
            $dados['nome'] = $this->input->post('nome');
            $dados['cep'] = $this->input->post('cep');
            $dados['rua'] = $this->input->post('rua');
            $dados['bairro'] = $this->input->post('bairro');
            $dados['cidade'] = $this->input->post('cidade');
            $dados['estado'] = $this->input->post('estado');
            $dados['numero'] = $this->input->post('numero');
            $dados['regiao'] = $this->input->post('regiao');
            $dados['telefone'] = $this->input->post('telefone');
            $dados['responsavel'] = $this->input->post('responsavel');
            $dados['twitter'] = $this->input->post('twitter');
            $dados['facebook'] = $this->input->post('facebook');
            $dados['site'] = $this->input->post('site');
            $dados['segunda'] = $this->input->post('segunda');
            $dados['terca'] = $this->input->post('terca');
            $dados['quarta'] = $this->input->post('quarta');
            $dados['quinta'] = $this->input->post('quinta');
            $dados['sexta'] = $this->input->post('sexta');
            $dados['sabado'] = $this->input->post('sabado');
            $dados['domingo'] = $this->input->post('domingo');
            $dados['email'] = $this->input->post('email');
            $dados['senha'] = $this->input->post('senha');
            $dados['ativar'] = 0;
            $this->db->query("INSERT INTO igrejas SELECT * FROM igrejas WHERE md5(id) = '".$this->input->post('id')."'");
            $this->db->where('md5(id)', $this->input->post('id'));
            if($this->db->update('igrejas',$dados)){
                echo "Dados alterados com sucesso!";
                
            }
            else {
                echo "Houve um erro ao processar a alteração";
            }
        }
    }
  
    
    }
  
}
?>

