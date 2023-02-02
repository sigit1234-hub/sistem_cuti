<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data SPL</title>
</head>

<body>
    <?php
    header('Content-Type: application/vnd-ms-excel');
    header('Content-Disposition: attachment; Filename=Data SPL ' . $subtitle . '.xls');
    ?>

    <center>
        <h2><?= $titile . '<br>' . $subtitle; ?></h2>
    </center>

</body>

</html>