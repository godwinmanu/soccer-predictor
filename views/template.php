<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/public/js/jquery-3.6.0.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="/public/DataTables/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/DataTables/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="/public/Font_awesome/css/all.min.css">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/results.css">
    <link rel="stylesheet" href="/public/css/contactus.css">
    <link rel="stylesheet" href="/public/css/faq.css">
    <title> <?= $title ?> </title>
</head>
<body>
    <?php require("partials/menu.php"); ?>

    <?= $content ?>

    <?php require("partials/footer.php"); ?>      
</body>
</html>