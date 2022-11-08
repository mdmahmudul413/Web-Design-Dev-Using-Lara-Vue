<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
    <table border="1" width="600">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
            <?php foreach ($students as $student){?>
                <tr>
                    <td><?php echo $student['id'];?></td>
                    <td><?php echo $student['name'];?></td>
                    <td><?php echo $student['email'];?></td>
                    <td><?php echo $student['mobile'];?></td>
                </tr>
            <?php }?>
    </table>
    <div class="div-one">This is a division.</div>
</body>
</html>