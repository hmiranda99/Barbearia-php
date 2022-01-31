<?php
    require_once("Conexao.php");

    class Contato{

        private $idContato;
        private $emailContato;
        private $textoContato;

        public function getidContato(){
            return $this->idContato;
        }

        public function setIdContato($idContato){
            $this->idContato = $idContato;
        }

        public function getEmailContato(){
            return $this->emailContato;
        }

        public function setEmailContato($emailContato){
            $this->emailContato = $emailContato;
        }

        public function getTextoContato(){
            return $this->textoContato;
        }

        public function setTextoContato($textoContato){
            $this->textoContato = $textoContato;
        }

        public function cadastrar($contato){
            $con = Conexao::conectar();

            $stmt = $con->prepare("INSERT INTO tbcontato (emailContato, textoContato)
                                   VALUES (?, ?)");

            $stmt->bindValue(1, $contato->getEmailContato());
            $stmt->bindValue(2, $contato->getTextoContato());
            $stmt->execute();
        }

        public function listar(){
            $con = Conexao::conectar();

            $querySelect = "SELECT idContato, emailContato, textoContato FROM tbcontato";
            $resultado = $con->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        public function contar(){
            $con = Conexao::conectar();
            $querySelect = "SELECT COUNT(idContato) AS Quantidade FROM tbcontato";
            $resultado = $con->query($querySelect);
            $contagem = $resultado->fetchAll();
            return $contagem; 
        }








    }

























?>