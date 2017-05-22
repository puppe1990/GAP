<?php
class Usuarios_model extends CI_Model {
    public function salva($usuario) {
        $this->db->insert("usuarios", $usuario);
    }

    public function buscaPorCpfESenha($cpf, $senha) {
    	$this->db->where("cpf", $cpf);
    	$this->db->where("senha", $senha);
        $usuario = $this->db->get("usuarios")->row_array();
        return $usuario;
    }

}