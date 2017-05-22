<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Produtos extends CI_Controller {

	public function index()
	{
		//$this->output->enable_profiler(true);	

		$this->load->model("produtos_model");
		
		$produtos = $this->produtos_model->buscaTodos();

		$dados = array("produtos" => $produtos);
		$this->load->helper(array("currency"));
		$this->load->view("produtos/index.php", $dados);
	}

		public function formulario()
	{
		$this->load->view("produtos/formulario");
	}

	public function novo() {
		$produto = array(
			"nome" => $this->input->post("nome"),
			"valor" => $this->input->post("valor"),
			"modelo" => $this->input->post("modelo"),
			"categoria" => $this->input->post("categoria"),
			"quantidade" => $this->input->post("quantidade")
		);

		$this->load->model("produtos_model");
		$this->produtos_model->salva($produto);
		$this->session->set_flashdata("success", "Produto salvo com sucesso");
		redirect("/");
	}


}


 ?>