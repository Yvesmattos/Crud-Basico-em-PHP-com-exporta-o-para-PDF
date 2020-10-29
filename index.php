<?php
require "controllers/jogosController.php";

$jogosController = new JogosController;


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["excluir"])) {
        $jogosController->deletarJogo($_GET["JogoId"]);
    } else if (isset($_GET["edit"])) {
        $jogosController->buscar($_GET["JogoId"]);
    } else if(isset($_GET["gerarRelatorio"])){
        $jogosController->gerarTabela();
    } 
    else {
        $jogosController->index();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["edit"])) {
        $jogosController->alterarJogo($_REQUEST);
    } else {
        $jogosController->cadastrarJogo($_REQUEST);
    }
}
