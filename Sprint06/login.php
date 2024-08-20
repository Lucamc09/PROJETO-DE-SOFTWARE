<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container">
  <div class="header">
    <h2>Login</h2>
  </div>

  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Usuário</label>
      <input type="text" name="username" required>
    </div>
    <div class="input-group">
      <label>Senha</label>
      <input type="password" name="password" required>
    </div>
    <div class="input-group">
      <button type="submit" class="btn btn-primary" name="login_user">Login</button>
    </div>
    <p>
    <a href="funcionario/login_funcionario.php" class="btn btn-secondary">Funcionário</a>

    </p>
    <p>
      Não tem uma conta? <a href="register.php">Criar</a>
    </p>
  </form>
</body>
</html>