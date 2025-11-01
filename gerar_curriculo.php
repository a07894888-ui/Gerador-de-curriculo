<?php
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$formacao = $_POST['formacao'];
$empresas = $_POST['empresa'];
$cargos = $_POST['cargo'];
$periodos = $_POST['periodo'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Currículo de <?php echo htmlspecialchars($nome); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-white">
  <div class="container mt-5 mb-5 border p-4 rounded shadow">
    <h2 class="text-center mb-4"><?php echo htmlspecialchars($nome); ?></h2>
    <p><strong>Data de Nascimento:</strong> <?php echo $nascimento; ?> (<?php echo $idade; ?> anos)</p>
    <p><strong>E-mail:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
    <hr>
    <h4>Formação Acadêmica</h4>
    <p><?php echo nl2br(htmlspecialchars($formacao)); ?></p>
    <h4 class="mt-4">Experiências Profissionais</h4>
    <?php
    if (!empty($empresas)) {
      echo "<ul>";
      for ($i = 0; $i < count($empresas); $i++) {
        echo "<li><strong>" . htmlspecialchars($empresas[$i]) . "</strong> - " . htmlspecialchars($cargos[$i]) . " (" . htmlspecialchars($periodos[$i]) . ")</li>";
      }
      echo "</ul>";
    } else {
      echo "<p>Nenhuma experiência informada.</p>";
    }
    ?>
    <div class="text-center mt-4">
      <button onclick="window.print()" class="btn btn-primary">Baixar/Imprimir Currículo</button>
    </div>
  </div>
</body>
</html>