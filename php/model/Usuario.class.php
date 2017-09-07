<?php
class Usuario{
    var $tipo;
    var $idusuario;
    var $email;
    var $senha;
    var $fonecelular;
    var $nomefantasia;
    var $observacao;
    var $tipopessoa;
    var $cpfcnpj;
    var $razaosocial;
    var $vendedor_idusuario;

    function setUsuario($dados){
    	$this->idusuario = $dados['idusuario'];
    	$this->tipo = $dados['tipo'];
    	$this->email = $dados['email'];
    	$this->senha = $dados['senha'];
        $this->fonecelular = $dados['fonecelular'];
        $this->nomefantasia = $dados['nomefantasia'];
    	$this->observacao = $dados['observacao'];
    	$this->tipopessoa = $dados['tipopessoa'];
    	$this->cpfcnpj = $dados['cpfcnpj'];
        $this->razaosocial = $dados['razaosocial'];
        $this->vendedor_idusuario = $dados['vendedor_idusuario'];
    }
    function setTipo($tipo){
    	$this->tipo = $tipo;
    }
    function getTipo(){
    	return $this->tipo;
    }
    function setIdusuario($idusurio){
    	$this->idusuario = $idusuario;
    }
    function getIdusuario(){
    	return $this->idusuario;
    }
    function setFoneCelular($fonecelular){
    	$this->fonecelular = $fonecelular;
    }
    function getFoneCelular(){
    	return $this->fonecelular;
    }
    function setObservacao($observacao){
    	$this->observacao = $observacao;
    }
    function getObservacao(){
    	return $this->observacao;
    }
    function setTipoPessoa($tipopessoa){
    	$this->tipopessoa = $tipopessoa;
    }
    function getTipoPessoa(){
    	return $this->tipopessoa;
    }
    function setEmail($email){
    	$this->email = $email;
    }
    function getEmail(){
        return  $this->email;
    }
    function setSenha($senha){
    	$this->senha = $senha;
    }
    function getSenha(){
        return $this->senha;
    }
    function setCpfCnpj($cpfcnpj){
        $this->cpfcnpj = $cpfcnpj;
    }
    function getCpfCnpj(){
        return $this->cpfcnpj;
    }
    function setRazaoSocial($razaosocial){
        $this->razaosocial = $razaosocial;
    }
    function getRazaoSocial(){
        return $this->razaosocial;
    }
    function setIdVendedor($vendedor_idusuario){
        $this->vendedor_idusuario = $vendedor_idusuario;
    }
    function getIdVendedor(){
        return $this->vendedor_idusuario;
    }
}
?>