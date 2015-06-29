<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {
	/**
	* Layout default utilizado pelo controlador.
	*/
	public $layout = 'principal';
	 
	/**
	* Titulo default.
	*/
	public $title = 'Principal';
	 
	/**
	* Definindo os css default.
	*/
	public $css = array('bootstrap-theme.min', 'bootstrap.min');
	 
	/**
	* Carregando os js default.
	*/
	public $js = array('jquery.min', 'bootstrap.min');
	 

 
	// Metodoo index
	public function index(){
	// Carregando a view.
		$this->load->view('principal');
	}
 

}
 
?>