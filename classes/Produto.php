<?php
    require_once("Conexao.php");
    
    class Produto{

        private $idProduto;
        private $nomeProduto;
        private $descProduto;
        private $fotoProduto;

        //- - -| EXIBIR & ATUALIZAR O ID |- - -//
        public function getIdProduto(){
            return $this-> idProduto;
        }

        public function setIdProduto($idProduto){
            $this-> idProduto = $idProduto;
        }
        //- - -| - = - = -  =  - = - = - |- - -//


        //- - -| EXIBIR & ATUALIZAR O NOME |- - -//
        public function getNomeProduto(){
            return $this-> nomeProduto;
        }

        public function setNomeProduto($nomeProduto){
            $this-> nomeProduto = $nomeProduto;
        }
        //- - -| - = - = -  =  - = - = - |- - -//


        //- - -| EXIBIR & ATUALIZAR O DESC |- - -//
        public function getDescProduto(){
            return $this-> descProduto;
        }

        public function setDescProduto($descProduto){
            $this-> descProduto = $descProduto;
        }
        //- - -| - = - = -  =  - = - = - |- - -//


        //- - -| PARTE DA FOTO |- - -//
        public function getFotoProduto(){
            return $this-> fotoProduto;
        }

        public function setFotoProduto($fotoProduto){
            $this-> fotoProduto = $fotoProduto;
        }
        //- - -| - = - = -  =  - = - = - |- - -//


        public function cadastrar($produto){
            $cone = Conexao::conectar();

            $stmt = $cone->prepare("INSERT INTO tbproduto(nomeProduto, descProduto, fotoProduto)
                                        VALUES (?, ?, ?)");

            $stmt->bindValue(1, $produto->getNomeProduto());
            $stmt->bindValue(2, $produto->getDescProduto());
            $stmt->bindValue(3, $produto->getFotoProduto());
            $stmt->execute();
        }

        public function listar(){
            $con = Conexao::conectar();
            $querySelect = "SELECT idProduto, nomeProduto, descProduto, fotoProduto FROM tbproduto";
            $resultado = $con->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
        }

        public function contar(){
            $con = Conexao::conectar();
            $querySelect = "SELECT COUNT(idProduto) AS Quantidade FROM tbproduto";
            $resultado = $con->query($querySelect);
            $contagem = $resultado->fetchAll();
            return $contagem; 
        }
   }

?>