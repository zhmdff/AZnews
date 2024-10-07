<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<?=$this->pagination_bootstrap->render();?>
<table>
    <tr>
        <th>ID</th>
        <th>DESC</th>

    </tr>

    <?php if ($results): ?>

        <?php foreach ($results as $val): ?>

            <tr>
                <td><?=$val->news_id?></td>
                <td><?=$val->news_title?></td>
            </tr>

        <?php endforeach ?>

    <?php endif ?>
</table>


</body>
</html>