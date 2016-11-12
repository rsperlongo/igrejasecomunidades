<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Igrejas extends CI_Controller {
     
     public function index() {
         $this->load->model('igrejas_model', 'igrejas');
         $data['igrejas'] = $this->igrejas->getIgrejas(); 
         $this->load->view('lista-igrejas',$data);
         
         
     }
     
     
 } 
?>

