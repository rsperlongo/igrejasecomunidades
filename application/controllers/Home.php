<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }

	
	public function index()
	{
		$this->load->view('home');
	}
        
        public function busca() {
            
            $this->load->view('busca');
        }
        
        public function listarCidades($estados) {
            $this->db->select("SELECT * FROM cidades WHERE estado as uf ORDER BY nome ASC");
            $this->db->from('cidades');
            if($estados == 'cidades'){
                return $this->db->get($estados) ;
        }
            else {
                return $this->db->get()->result();
            }
        
        }
}
