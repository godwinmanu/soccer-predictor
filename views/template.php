<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/soccer_predictor/public/js/jquery-3.6.0.js"></script>
    <script src="/soccer_predictor/public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/soccer_predictor/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/soccer_predictor/public/Font_awesome/css/all.min.css">
    <link rel="stylesheet" href="/soccer_predictor/public/css/main.css">
    <link rel="stylesheet" href="/soccer_predictor/public/css/results.css">
    <link rel="stylesheet" href="/soccer_predictor/public/css/contactus.css">
    <link rel="stylesheet" href="/soccer_predictor/public/css/faq.css">
    <title> <?= $title ?> </title>
</head>
<body>
    <?php require("partials/menu.php"); ?>

    <?= $content ?>

    <?php require("partials/footer.php"); ?>      
</body>
</html>