<?php

define("USUARIO","sistema_rota66");
define("SENHA", "123456");

class DaoConexao {

    private $erro;
    public function conectar() {
        try {
            $conexao = new PDO("mysql:host=localhost;dbname=sistema_rota66", USUARIO, SENHA);
            return $conexao;
        
        }catch(PDOException $excessao) {
        
            $this->erro = $excessao->getMessage();
            return null;
        }
    }

    public function getErro() {
        return $this->erro;
    }
}
