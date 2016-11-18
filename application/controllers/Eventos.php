<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Eventos extends CI_Controller {

     function __construct() {
         parent::__construct();
         $this->load->model('eventos_model', 'eventos');
    }
    
    public function index() {
        
        $data['eventos'] = $this->eventos->listar_eventos(); 
        $this->load->view('eventos', $data);
    }

}

?>

