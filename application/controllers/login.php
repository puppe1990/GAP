<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function autenticar() {

    	$this->load->model("usuarios_model");
    	$cpf = $this->input->post("cpf");
        $senha = md5($this->input->post("senha"));
    	$usuario = $this->usuarios_model->buscaPorCpfESenha($cpf, $senha);

    	if($usuario) {
    		$this->session->set_userdata("usuario_logado", $usuario);
    		$this->session->set_flashdata("success", "Logado com sucesso");
    	} else {
    		$this->session->set_flashdata("danger", "Cpf ou senha inválida");
    	}

    	redirect('/');
    }

    public function logout() {
    	$this->session->unset_userdata("usuario_logado");
    	$this->session->set_flashdata("success", "Deslogado com sucesso");
    	redirect('/');
    }
}
