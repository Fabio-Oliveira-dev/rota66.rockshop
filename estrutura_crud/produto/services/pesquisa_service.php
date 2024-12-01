<?php
require_once("assets/model/DaoConexao.php");
require_once("model/produto_modelo.php");
require_once("upload.php");

$daoConexao = new DaoConexao;
$conexao = $daoConexao->conectar();

if($conexao != null) {
    // novo produto
    $produto = new Produto();
    $produto->setNome($_REQUEST["nome"]);
    $produto->setDescricao($_REQUEST["descricao"]);
    $produto->setValor($_REQUEST["valor"]);
    $produto->setImagem(upload());

    //Grava dados
    $sql = "INSERT INTO produto (nome, descricao, valor, imagem) VALUES (:nome, :descricao, :valor, :imagem)";
    $instrucao = $conexao->prepare($sql);
    $instrucao = bindValue(":nome", $produto->getNome());
    $instrucao = bindValue(":descricao", $produto->getDescricao());
    $instrucao = bindValue(":valor", $produto->getValor());
    $instrucao = bindValue(":imagem", $produto->getImagem());
    $instrucao->execute();

    //redireciona
    header("Location: /produto/?pagina=pesquisa");
    exit();
} else {
    return null;//alterar pois no video não mostra o codigo
}