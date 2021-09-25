<header>
    <div class="jumbotron">
        <!-- <a href="/index.php">SOCCER PREDICTOR LOGO</a> -->
        <a href="/soccer_predictor/index.php">SOCCER PREDICTOR LOGO</a>
        <div id="menu-bars">
            <i class="fas fa-bars text-light"></i>
        </div>
    </div>
    <nav>
        <ul>
            <li> <a href="/soccer_predictor/index.php" id="predictions-tab"> PREDICTIONS  </a></li>
            <li> <a href="/soccer_predictor/views/pages/results.php" id="results-tab"> RESULTS </a></li>
            <li> <a href="/soccer_predictor/views/pages/faq.php" id="faqs-tab"> FAQs </a></li>
            <li> <a href="/soccer_predictor/views/pages/contactus.php" id="contact-us-tab"> CONTACT US </a></li>
           
<!--             <li> <a href="/index.php" id="predictions-tab"> PREDICTIONS  </a></li>
            <li> <a href="/views/pages/results.php" id="results-tab"> RESULTS </a></li>
            <li> <a href="/views/pages/faq.php" id="faqs-tab"> FAQs </a></li>
            <li> <a href="/views/pages/contactus.php" id="contact-us-tab"> CONTACT US </a></li>
 -->        </ul>

        <div class="social-networks">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
    </nav>
</header>

<script>
    let userScreenWidth = screen.width;

    $(window).scroll(function(){
        if($(this).scrollTop() > 100 ){
            $(".jumbotron").css("display","none");
        }
        else{
            $(".jumbotron").css("display","flex");
        }
    });

    setInterval(() => {
        $("#menu-bars .fa-bars").click(function(){
            $("nav").addClass("displaySideBar");
            $("#menu-bars .fa-bars").prop("class","fas fa-times");
        
            $("#menu-bars .fa-times").click(function(){
                $("nav").removeClass("displaySideBar");
                $("#menu-bars .fa-times").prop("class","fas fa-bars");  
            });
        });
    }, 500);

    if(userScreenWidth < 992){
        $("ul li").click(function(){
            $("nav").removeClass("displaySideBar");
            $("#menu-bars .fa-times").prop("class","fas fa-bars");  
        });
    }

    

</script>
