<?php
    require_once ("Conexao.php");

    class Cliente{

        private $idCliente;
        private $nomeCliente;
        private $cpfCliente;
        private $celularCliente;

        //- - -| EXIBIR & ATUALIZAR O ID |- - -//
        public function getIdCliente(){
            return $this-> idCliente;
        }

        public function setIdCliente($idCliente){
            $this-> idCliente = $idCliente;
        }
        //- - -| - = - = -  =  - = - = - |- - -//


        //- - -| EXIBIR & ATUALIZAR O NOME |- - -//
        public function getNomeCliente(){
            return $this-> nomeCliente;
        }

        public function setNomeCliente($nomeCliente){
            $this-> nomeCliente = $nomeCliente;
        }
        //- - -| - = - = -  =  - = - = - |- - -//


        //- - -| EXIBIR & ATUALIZAR O CPF |- - -//
        public function getCpfCliente(){
            return $this-> cpfCliente;
        }

        public function setCpfCliente($cpfCliente){
            $this-> cpfCliente = $cpfCliente;
        }
        //- - -| - = - = -  =  - = - = - |- - -//


        //- - -| EXIBIR & ATUALIZAR O NOME |- - -//
        public function getCelularCliente(){
            return $this-> celularCliente;
        }

        public function setCelularCliente($celularCliente){
            $this-> celularCliente = $celularCliente;
        }
        //- - -| - = - = -  =  - = - = - |- - -//


        public function cadastrar($cliente){
            $cone = Conexao::conectar();

            $stmt = $cone->prepare("INSERT INTO tbcliente(nomeCliente, cpfCliente, celularCliente)
                                        VALUES (?, ?, ?)");

            $stmt->bindValue(1, $cliente->getNomeCliente());
            $stmt->bindValue(2, $cliente->getCpfCliente());
            $stmt->bindValue(3, $cliente->getCelularCliente());
            $stmt->execute();
        }

        public function listar(){
            $con = Conexao::conectar();
            $querySelect = "SELECT idCliente, nomeCliente, cpfCliente, celularCliente FROM tbcliente";
            $resultado = $con->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
        }

        public function contar(){
            $con = Conexao::conectar();
            $querySelect = "SELECT COUNT(idCliente) AS Quantidade FROM tbcliente";
            $resultado = $con->query($querySelect);
            $contagem = $resultado->fetchAll();
            return $contagem; 
        }
   }

?>