<?php
    require_once("Conexao.php");

    class Servico{

        private $idServico;
        private $nomeServico;
        private $descServico;
        private $fotoServico;

        //- - -| EXIBIR & ATUALIZAR O ID |- - -//
        public function getIdServico(){
            return $this-> idServico;
        }

        public function setIdServico($idServico){
            $this-> idServico = $idServico;
        }
        //- - -| - = - = -  =  - = - = - |- - -//


        //- - -| EXIBIR & ATUALIZAR O NOME |- - -//
        public function getNomeServico(){
            return $this-> nomeServico;
        }

        public function setNomeServico($nomeServico){
            $this-> nomeServico = $nomeServico;
        }
        //- - -| - = - = -  =  - = - = - |- - -//


        //- - -| EXIBIR & ATUALIZAR O DESC |- - -//
        public function getDescServico(){
            return $this-> descServico;
        }

        public function setDescServico($descServico){
            $this-> descServico = $descServico;
        }
        //- - -| - = - = -  =  - = - = - |- - -//


        //- - -| PARTE DA FOTO |- - -//
        public function getFotoServico(){
            return $this-> fotoServico;
        }

        public function setFotoServico($fotoServico){
            $this-> fotoServico = $fotoServico;
        }
        //- - -| - = - = -  =  - = - = - |- - -//


        public function cadastrar($servico){
            $cone = Conexao::conectar();

            $stmt = $cone->prepare("INSERT INTO tbservico(nomeServico, descServico, fotoServico)
                                        VALUES (?, ?, ?)");

            $stmt->bindValue(1, $servico->getNomeServico());
            $stmt->bindValue(2, $servico->getDescServico());
            $stmt->bindValue(3, $servico->getFotoServico());
            $stmt->execute();
        }

        public function listar(){
            $con = Conexao::conectar();
            $querySelect = "SELECT idServico, nomeServico, descServico, fotoServico FROM tbservico";
            $resultado = $con->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
        }

        public function contar(){
            $con = Conexao::conectar();
            $querySelect = "SELECT COUNT(idServico) AS Quantidade FROM tbservico";
            $resultado = $con->query($querySelect);
            $contagem = $resultado->fetchAll();
            return $contagem; 
        }
   }

?>