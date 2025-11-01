<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de Currículo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Gerador de Currículo</a>
    </div>
  </nav>
  <div class="container mt-4 mb-5">
    <h2 class="text-center mb-4">Preencha suas informações</h2>
    <form action="gerar_curriculo.php" method="POST" target="_blank">
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome Completo:</label>
          <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="col-md-3">
          <label for="nascimento" class="form-label">Data de Nascimento:</label>
          <input type="date" class="form-control" id="nascimento" name="nascimento" required>
        </div>
        <div class="col-md-3">
          <label for="idade" class="form-label">Idade:</label>
          <input type="text" class="form-control" id="idade" name="idade" readonly>
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" required>
      </div>
      <hr>
      <h4>Experiências Profissionais</h4>
      <div id="experiencias"></div>
      <button type="button" id="addExperiencia" class="btn btn-outline-primary mt-2 mb-3">+ Adicionar Experiência</button>
      <hr>
      <h4>Formação Acadêmica</h4>
      <textarea class="form-control mb-3" name="formacao" rows="3" required></textarea>
      <div class="text-center mt-4">
        <button type="submit" class="btn btn-success btn-lg">Gerar Currículo</button>
      </div>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>