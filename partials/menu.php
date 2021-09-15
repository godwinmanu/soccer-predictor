<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Font_awesome/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Soccer Predictor</title>
</head>
<body>
    <header>
        <div class="jumbotron">
            <a href="#">SOCCER PREDICTOR LOGO</a>
        </div>
        <nav>
            <ul>
                <li> <a href="#" class="#">PREDICTIONS</a></li>
                <li> <a href="#" class="#"> RESULTS</a></li>
                <li> <a href="#" class="#"> FAQs</a></li>
                <li> <a href="#" class="#"> CONTACT US</a></li>
            </ul>

            <div class="social-networks">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </nav>
    </header>

    <script>
        $(window).scroll(function(){
            if($(this).scrollTop() > 100 ){
                $(".jumbotron").css("display","none");
            }
            else{
                $(".jumbotron").css("display","flex");
            }
        });
    </script>
</body>
</html>