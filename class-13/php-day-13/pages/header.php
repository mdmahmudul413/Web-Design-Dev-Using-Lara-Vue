<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to eMart</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <div class="container">
        <a href="action.php?page=home" class="navbar-brand">LOGO</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li><a class="nav-link" href="action.php?page=home">Home</a></li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="">All Categories</a>
                    <ul class="dropdown-menu">
                        <?php foreach ($categories as $category){ ?>
                        <li><a class="dropdown-item" href="action.php?page=categoryProducts&&id=<?php echo $category['id'];?>"><?php echo $category['name']?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="">All Brands</a>
                    <ul class="dropdown-menu">
                        <?php foreach ($brands as $brand){ ?>
                        <li><a class="dropdown-item" href="action.php?page=brandProducts&&id=<?php echo $brand['id'];?>"><?php echo $brand['name'];?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a class="nav-link" href="">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>