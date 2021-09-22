<?php $title = "Contact Us | Soccer Predictor"; ?>

<?php ob_start(); ?>

  <section class="firstSectionContact">
      <h3 class="">Contact us</h3>
      <ul>
          <li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i> </li>
          <li>Contact us</li>
      </ul>
  </section>

  <section class="secondSectionContact">  
    <div class="first-column">
        <div class="heading-component">
            <h5 class="heading-component-title"> Get in touch </h5>
            <hr>
        </div>

        <form class="contactForm" method="post" action="#">

            <div class="name-phone">
                <input class="form-input" id="form-user-name" type="text" name="name" placeholder="Your name" required>                        
                <input class="form-input " id="form-user-phone" type="text" name="phone" placeholder="Your phone" required>
            </div>

            <div class="messageArea">
              <textarea class="form-input" id="form-message" name="message" placeholder="Message" required></textarea>
            </div>

            <div class="email-sendButton">
                <input class="form-input" id="form-email" type="email" name="email" placeholder="E-mail" required>
                <button class="sendButton" type="submit">Send message</button>
            </div>
        
        </form>
    </div>

    <div class="second-column"> 
        <div class="heading-component">
          <h5 class="heading-component-title"> Contact Details </h5>
          <hr>
        </div>
        

        <div class="contact-list">
        <div>
            <dl class="dlEmail">
              <dt>E-mail</dt>
              <dd><i class="icon fa fa-envelope-open"></i><a class="link" href="mailto:#">contact@soccerpredictor.com</a></dd> 
            </dl>
            <hr>
        </div>

          <div>
              <dl>
                <dt>Address</dt>
                <dd><i class="icon fa fa-map-marker-alt"></i><a class="link" href="#">80 Abogoem Avenue Cheasy Chia, CK 58745</a></dd>
              </dl>
              <hr>
          </div>
          

          <div>
              <dl class="dlPhone">
                <dt>Phone</dt>
                <dd><i class="icon fa fa-phone-alt"></i> <a class="link link-md" href="tel:#">+44 08 375 28 97</a> </dd> 
              </dl>  
          </div>
        
        </div>
    </div>
  </section>

  <script>
      $(function(){
          $("#contact-us-tab").css({
              color: "rgb(255, 208, 0)"
          });
      });
  </script>

<?php $content = ob_get_clean(); ?>

<?php require("../template.php"); ?>