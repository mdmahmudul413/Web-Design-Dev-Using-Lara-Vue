<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php foreach ($blogs as $blog){ ?>
    <div class="box-one">
        <h1><?php echo $blog["title"]?></h1>
        <p><?php echo $blog["description"]?></p>
        <img src="assets/img/<?php echo $blog["image"]?>" class="w-100" alt="1.jpg">
    </div>
    <?php } ?>


</body>
</html>