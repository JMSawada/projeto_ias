<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de IAs</title>
  <link rel="stylesheet" href="./assets/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Cadastro de Sites de IA</h1>
    <form id="form-cadastro" enctype="multipart/form-data">
      <label>Nome do Site:</label>
        <input type="text" name="nome" required>
      <label>URL:</label>
        <input type="url" name="url" required>
      <label>Imagem (URL):</label>
        <input type="url" name="imagem" placeholder="https://exemplo.com/imagem.png">
      <label>Descrição Curta:</label>
        <input type="text" name="descricao_curta" maxlength="255">
      <label>Descrição Longa:</label>
        <textarea name="descricao_longa" rows="4"></textarea>
      <label>Tipo:</label>
        <select name="tipo">
            <option value="IA">IA</option>
            <option value="API">API</option>
            <option value="Documentação">Documentação</option>
            <option value="Outro" selected>Outro</option>
        </select>
      <label>Ativo:</label>
        <select name="ativo">
            <option value="1" selected>Sim</option>
            <option value="0">Não</option>
      </select>
      <button type="submit">Salvar</button>
    </form>
    <div id="mensagem"></div>
  </div>
  <script src="assets/script.js"></script>
</body>
</html>
