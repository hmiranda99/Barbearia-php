<?php
    require_once("../classes/Conexao.php");
    require_once("../classes/Agenda.php");
    require_once("../classes/Cliente.php");
    require_once("../classes/Servico.php");
    header("Location: form-agenda.php");

    $agenda = new Agenda();
        $agenda->setDataAgenda($_POST['dataAgenda']);
        $agenda->setHoraAgenda($_POST['horaAgenda']);

    $cliente = new Cliente();
        $cliente->setIdCliente($_POST['clienteAgenda']);

    $servico = new Servico();
        $servico->setIdServico($_POST['servicoAgenda']);

    $agenda->setServico($servico);
    $agenda->setCliente($cliente);

    $agenda->cadastrar($agenda);
?>