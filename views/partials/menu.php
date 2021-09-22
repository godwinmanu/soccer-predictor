<header>
    <div class="jumbotron">
        <a href="/soccer_predictor/index.php">SOCCER PREDICTOR LOGO</a>
    </div>
    <nav>
        <ul>
            <li> <a href="/soccer_predictor/index.php" id="predictions-tab"> PREDICTIONS  </a></li>
            <li> <a href="/soccer_predictor/views/pages/results.php" id="results-tab"> RESULTS </a></li>
            <li> <a href="/soccer_predictor/views/pages/faq.php" id="faqs-tab"> FAQs </a></li>
            <li> <a href="/soccer_predictor/views/pages/contactus.php" id="contact-us-tab"> CONTACT US </a></li>
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
