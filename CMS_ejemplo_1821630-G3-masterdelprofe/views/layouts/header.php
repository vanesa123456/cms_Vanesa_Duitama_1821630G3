<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar">
        <a href="?controller=index" class="navbar-brand">CMS Ejemplo</a>
        <ul class="navbar-nav">
            <li><a class="nav-link" href="?controller=user">Users</a></li>
            <a class="nav-link" href="?controller=publicacion">Publicaciones</a>
        </ul>
        <?php if(isset($_SESSION['user'])): ?>
            <ul>
                <li><p><?= $_SESSION['user']->name; ?></p></li>
            </ul>
            <ul>
                <li>
                    <a href="?controller=security&method=logout" class="btn btn-light" >Cerrar sesion</a></p></li>
            </ul>
        <?php endif; ?>
    </nav>
    <main class="container">

