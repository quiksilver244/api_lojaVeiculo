<?php
class Upload {
    private $arquivo;
    private $dir_destino;

    function __construct($arquivo, $dir_destino){
        $this->arquivo = $arquivo;
        $this->dir_destino = $dir_destino;
    }

    private function getExtensao(){
        $ext = explode('.', $this->arquivo['name']);
        return $extensao = strtolower(end($ext));
    }

    private function ehImagem($extensao):bool{
        $extensoes = array('gif', 'jpeg', 'png', 'git', 'webp');
        if (in_array($extensao ,$extensoes)){
            return true;
        }
        else{
            return false;
        }
    }

    public function salvarImagem(): string|bool
}