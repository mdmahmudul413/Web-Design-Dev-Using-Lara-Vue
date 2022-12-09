<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="action.php?page=home" class="navbar-brand">
            LOGO
        </a>
        <ul class="navbar-nav ms-auto">
            <li><a class="nav-link" href="action.php?page=home">Home</a></li>
            <li><a class="nav-link" href="action.php?page=calculator">Calculator</a></li>
            <li><a class="nav-link" href="action.php?page=series">Series</a></li>
            <li><a class="nav-link" href="action.php?page=even-odd">Even/Odd</a></li>
            <li><a class="nav-link" href="action.php?page=counter">Counter</a></li>
        </ul>
    </div>
</nav>