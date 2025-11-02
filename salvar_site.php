<?php
header('Content-Type: application/json; charset=utf-8');
require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $url = $_POST['url'] ?? '';
    $imagem = $_POST['imagem'] ?? '';
    $descricao_curta = $_POST['descricao_curta'] ?? '';
    $descricao_longa = $_POST['descricao_longa'] ?? '';
    $tipo = $_POST['tipo'] ?? 'Outro';
    $ativo = $_POST['ativo'] ?? 1;

    if (empty($nome) || empty($url)) {
        echo json_encode(['sucesso' => false, 'mensagem' => 'Nome e URL são obrigatórios.']);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO sites (nome, url, imagem, descricao_curta, descricao_longa, tipo, ativo)
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $nome, $url, $imagem, $descricao_curta, $descricao_longa, $tipo, $ativo);

    if ($stmt->execute()) {
        echo json_encode(['sucesso' => true]);
    } else {
        echo json_encode(['sucesso' => false, 'mensagem' => 'Erro ao inserir: ' . $conn->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Método inválido.']);
}
?>
