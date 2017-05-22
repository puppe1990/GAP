<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function novo() {
        $usuario = array(
            "nomeUsuario" => $this->input->post("nomeUsuario"),
            "cpf" => $this->input->post("cpf"),
            "senha" => md5($this->input->post("senha")),
            "dataAdmissao" => $this->input->post("dataAdmissao"),
            "telefone" => $this->input->post("telefone")
        );

        $this->load->model("usuarios_model");
        $this->usuarios_model->salva($usuario);
        $this->load->view("usuarios/novo");
    }
}