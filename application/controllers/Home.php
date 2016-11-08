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
        
        public function listaCidades($estados) {
            $this->db->select("SELECT * FROM igrejas WHERE cidade_ID as cidades ORDER BY nome ASC");
            if($estados == 'cidades');
        }
}
