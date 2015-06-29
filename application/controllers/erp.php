<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Erp extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _erp_output($output = null)
	{
		$this->load->view('principal.php',$output);
	}

	// public function filiais()
	// {
	// 	$output = $this->grocery_crud->render();

	// 	$this->_erp_output($output);
	// }

	public function index()
	{
		$this->_erp_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function filiais_gerenciamento()
	{
		try{
			$crud = new grocery_CRUD();

			// $crud->set_theme('datatables');
			$crud->set_table('loja');
			$crud->set_subject('Office');
			$crud->required_fields('nome');
			$crud->columns('nome','cidade','telefone','logradouro','estado');
			$crud->display_as('numero_logradouro','Número')
				 ->display_as('pais','País')
				 ->display_as('cep','CEP');
			$output = $crud->render();

			$this->_erp_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function funcionarios_gerenciamento()
	{
			$crud = new grocery_CRUD();

			// $crud->set_theme('datatables');
			$crud->set_table('funcionario');
			$crud->columns('nome','email','cargo');			
			// $crud->set_relation('nome','email','cargo');
			// $crud->display_as('officeCode','Office City');
			$crud->set_subject('Funcionário');
			$crud->set_relation('cargo','departamento', 'descricao');
			$crud->required_fields('nome','cargo');

			// $crud->set_field_upload('file_url','assets/uploads/files');

			$output = $crud->render();

			$this->_erp_output($output);
	}

	public function clientes_gerenciamento()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('cliente');
			$crud->columns('codigo','nome','telefone','email','cidade','estado','cpf');
			$crud->display_as('cpf','CPF')
				 ->display_as('orgao_expedidor','Órgão Expedidor')
				 ->display_as('numero','Número')
				 ->display_as('cep','CEP');
			$crud->set_subject('Cliente');
			// $crud->set_relation('salesRepEmployeeNumber','employees','lastName');

			$output = $crud->render();

			$this->_erp_output($output);
	}

	public function vendas_gerenciamento()
	{
			$crud = new grocery_CRUD();

			// $crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->columns('codigo' ,'Data da Venda','Data de Envio','Data de Recebimento');
			$crud->set_table('vendas');
			$crud->set_subject('Vendas');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$this->_erp_output($output);
	}

	public function produtos_gerenciamento()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('produto');
			$crud->set_subject('Produto');
			// $crud->columns('codigo','nome','telefone','email','cidade','estado','cpf');
			// $crud->display_as('customerNumber','Customer');
			$crud->set_relation('categoria','categoria','descricao');			
			// $crud->unset_columns('productDescription');
			$crud->callback_column('preco',array($this,'valueToReal'));
			
			$output = $crud->render();

			$this->_erp_output($output);
	}

	public function valueToReal($value, $row){
		return "R$ ". number_format($value, 2,',', '.');
	}


}