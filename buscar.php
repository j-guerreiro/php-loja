<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Musical Rio</title>
</head>
<body>
  <!-- cabecalho|topo -->
  <header class="cabecalho-principal">
    <!-- formulario de busca -->
    <div class="titulo">
      <h1 class="titulo-interno">Encontre seu equipamento</h1>
    </div>
    <div class="form-busca">
      <form class="form-interno" method="POST" action="buscar.php">
        <input class="form-input" type="text" required>
        <label for="text">
        <button class="btn-enviar" type="submit">Buscar</button>
      </form>
    </div>
  </header>
  <!-- principal -->
  <main class="secao-principal">
    <section class="secao-interna"><?php echo "<h1>Resultados da busca aparecerão aqui! =)</h1>" ?></section>
  </main>
  <!-- rodape -->
  <footer class="secao-rodape">
    <div class="footer-interno"></div>
  </footer>
  
</body>
</html>