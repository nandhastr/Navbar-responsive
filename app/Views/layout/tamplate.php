<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB | IRNI</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mynerve&display=swap" rel="stylesheet">
</head>

<body>

    <?= $this->include('layout/navbar') ?>
    <?= $this->renderSection('content') ?>

    <script src="js/app.js"></script>
</body>

</html>