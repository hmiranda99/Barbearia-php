<?php
    require_once("Conexao.php");
    require_once("Cliente.php");
    require_once("Servico.php");

    class Agenda{

        private $idAgenda;
        private $dataAgenda;
        private $horaAgenda;
        private $idCliente;
        private $idServico;
        private $idUsuario;

        private $cliente;
        private $servico;
        private $usuario;

// ----------------------------------------------------\
        public function getIdAgenda(){
            return $this->idAgenda;
        }

        public function setIdAgenda($idAgenda){
            $this->idAgenda = $idAgenda;
        }

        public function getDataAgenda(){
            return $this->dataAgenda;
        }

        public function setDataAgenda($dataAgenda){
            $this->dataAgenda = $dataAgenda;
        }

// ----------------------------------------------------/
        public function getHoraAgenda(){
            return $this->horaAgenda;
        }

        public function setHoraAgenda($horaAgenda){
            $this->horaAgenda = $horaAgenda;
        }
  
// ----------------------------------------------------\
        public function getIdCliente(){
            return $this->idCliente;
        }

        public function setIdCliente($idCliente){
            $this->idCliente = $idCliente;
        }

        public function getCliente(){
            return $this->cliente;
        }

        public function setCliente($cliente){
            $this->cliente = $cliente;
        }
// ----------------------------------------------------/


// ----------------------------------------------------\
        public function getIdServico(){
            return $this->idServico;
        }

        public function setIdServico($idServico){
            $this->idServico = $idServico;
        }

        public function getServico(){
            return $this->servico;
        }

        public function setServico($servico){
            $this->servico = $servico;
        }
// ----------------------------------------------------/

        public function getUsuario(){
            return $this->usuario;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function cadastrar($agenda){
            $con = Conexao::conectar();

            $stmt = $con->prepare("INSERT INTO tbagenda (dataAgenda, horaAgenda, idcliente, idservico, idusuario)
                                    VALUES (?, ?, ?, ?, ?)");

            $stmt->bindValue(1, $agenda->getDataAgenda());
            $stmt->bindValue(2, $agenda->getHoraAgenda());
            $stmt->bindValue(3, $agenda->cliente->getIdCliente());
            $stmt->bindValue(4, $agenda->servico->getIdServico());
            $stmt->bindValue(5, 2);

            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();

            $querySelect = "SELECT idagenda, date_format(dataAgenda, '%d/%m/%Y') as dataAgenda, date_format(horaAgenda, '%H:%i') as horaAgenda, tbcliente.nomeCliente , tbservico.nomeServico , tbusuario.nomeUsuario 
                            FROM tbagenda
                            INNER JOIN tbservico
                                ON tbagenda.idservico = tbservico.idServico
                            INNER JOIN tbcliente
                                ON tbagenda.idcliente = tbcliente.idCliente
                            INNER JOIN tbusuario
                                ON tbagenda.idusuario = tbusuario.idUsuario";

            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   

        }

        public function contar(){
            $con = Conexao::conectar();
            $querySelect = "SELECT COUNT(idagenda) AS Quantidade FROM tbagenda";
            $resultado = $con->query($querySelect);
            $contagem = $resultado->fetchAll();
            return $contagem; 
        }

    }

?>