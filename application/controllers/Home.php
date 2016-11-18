<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Igrejas_model', 'igrejas');
        $this->load->model('eventos_model', 'eventos');
    }

	
	public function index()
	{
		$this->load->view('home');
	}
        
        public function busca() {
            $this->load->model('igrejas_model');
            $dados['igrejas'] = $this->igrejas->busca();
            
            $this->load->view('resultado-busca', $dados);
            
        }
        
        public function eventos($id = NULL) {
            $this->db->where($id, 'ID');
            $data['eventos'] = $this->eventos->get_eventos(); 
            $this->load->view('eventos', $data);
            
        }
        
        public function destaques_eventos($eventos) {
        $data_pagina['eventos'] = $this->eventos_model->destaques_eventos($eventos); 
        $this->load->view('eventos', $data_pagina);
    }
        
}
        
        
