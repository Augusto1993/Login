<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Login</title>
</head>
<body>
<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<div id="fullscreen_bg" class="fullscreen_bg"/>

<div class="container">

    <form class="form-signin" method="POST" action="valida.php">
        <h1 class="form-signin-heading text-muted">Sign In</h1>
        <input type="text" class="form-control" placeholder="Usuario" name="usuario" required="" autofocus="">
        <input type="password" class="form-control" name="senha" placeholder="Senha" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnLogin" value="Acessar">
            Acessar
        </button>
    </form>

</div>
Usuário cadastrado no Banco de Dados<br>
Usuário: Augusto <br>
Senha: 1234 <br>
</body>
</html>