<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control_allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
$metodoSolicitado = $_SERVER['REQUEST_METHOD'];
$id = $_GET['id'] ?? null;

switch($metodoSolicitado){
    case "POST":
        $dados_recebido = json_decode(file_get_contents("php://input"), true);
        break;
}
?>