<?php
require_once 'model/Upload.php';
$arquivo = $_FILES['arquivo'];

$up = new Upload($arquivo, 'assets/img');
$result = $up ->salvarImagem();
if ($result){
    http_response_code(200);
    $retorno["result"] = true;
    $retorno["url_arquivo"] = '';
}
else{
    http_response_code(404);
    $retorno["result"] = false;
    $retorno["url_arquivo"] = '';
}
echo jsaon_encode($retorno);