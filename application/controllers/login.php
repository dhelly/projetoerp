<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	* Layout default utilizado pelo controlador.
	*/
	public $layout = 'default';
	 
	/**
	* Titulo default.
	*/
	public $title = 'ERP - Inútil';
	 
	/**
	* Definindo os css default.
	*/
	public $css = array('bootstrap-theme.min', 'bootstrap.min', 'formoid-solid-blue');
	 
	/**
	* Carregando os js default.
	*/
	public $js = array('jquery.min');

	public function __construct() {
        parent::__construct();
    }

	public function index(){
		$this->load->view('login');
	}

	public function logar(){		
		$login = $this->input->post('usuario');
		$senha = $this->input->post('senha');
		$this->db->where('login',$login);
		$this->db->where('senha',md5($senha));
		$this->db->where('permissao',1);
		$usuario = $this->db->get('usuario')->result();	
		var_dump($usuario);	
		if(count($usuario)===1){
			$dados = array('usuario'=> $usuario[0]->usuario,'logado'=>TRUE);
			$this->session->set_userdata($dados);
			redirect(site_url("erp/principal"));
		}
		else{
			redirect(site_url("login"));
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url("login"));	
	}

	
}
