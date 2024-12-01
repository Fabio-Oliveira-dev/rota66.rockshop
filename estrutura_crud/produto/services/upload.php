<?php

function upload() {
    $extensao = pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION);
    $nomeUnico = inuqid() . '.' . $extensao;
    $arquivoUpload = "../storage/" . $nomeUnico;
    $caminhoArquivo = "storage/" . $nomeUnico;

    if(move_uploaded_file($_FILES["imagem"]["tmp_name"], $arquivoUpload)) {
        return $caminhoArquivo;
    } else {
        return null;
    }
}