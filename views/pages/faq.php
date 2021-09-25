<?php $title = "FAQs | Soccer Predictor"; ?>

<?php ob_start(); ?>
    
    <div class="containFAQ">
        <div class="heading-component">
            <h5 id="title_faq">Frequently Asked Questions (FAQ)</h5>
        </div>
        <div class="question_reponse">
            <p class="question"> <span>Q.</span> What does 1, X, 2 mean?</p>
            <p class="reponse"> <span>A.</span> 1(home team wins), X( teams draw), 2(away team wins)</p>
        </div>
        <div class="question_reponse">
            <p class="question"> <span>Q.</span> What does 1X, 12, X2 mean?</p>
            <p class="reponse"> <span>R.</span> 1(home team wins or draws), 12(home team wins or away), X2(away team wins)</p>
        </div>
        <div class="question_reponse">
            <p class="question"> <span>Q.</span> The tips has changed. Why?</p>
            <p class="reponse"> <span>R.</span> It happed because the odds for the match has changed, therefore the tips changes as well</p>
        </div>
        <div class="question_reponse">
            <p class="question"> <span>Q.</span> Do you provide tennis, hockey horses tips</p>
            <p class="reponse"> <span>R.</span> No we do not. We are soccer predictors</p>
        </div>
        <div class="question_reponse">
            <p class="question"> <span>Q.</span> I have won big money, how can I thank you?</p>
            <p class="reponse"> <span>R.</span> Congratulations to your win! You will make us happy if you stay connected to soccer predictors and tell your friends about us.</p>
        </div>
        <div class="question_reponse">
            <p class="question"> <span>Q.</span> How do I make comments or ask questions</p>
            <p class="reponse"> <span>R.</span> Please use our contact form on <a href="www.contact_link_project.net"> www.contact_link_project.net</a></p>
        </div>
        <div class="question_reponse">
            <p class="question"> <span>Q.</span> Do you provide fixed tips</p>
            <p class="reponse"> <span>R.</span> No we do not. Our tips are based on the team's current performance, player's injuries and mutual statistics</a></p>
        </div>
        <div class="question_reponse">
            <p class="question"> <span>Q.</span> Can I bet on soccer_Predictor.net</p>
            <p class="reponse"> <span>R.</span> No you can't. We are not bookmakers. We offer soccer tips and matchs results.For betting please use reliable and trusted bookmakers</p>
        </div>
    </div>
    <script>
        $(function(){
            let userScreenWidth = screen.width;

            if(userScreenWidth < 992){
                $("#faqs-tab").parent().css({
                    backgroundColor: "#64b000"
                });
            }
            else{
                $("#faqs-tab").css({
                    color: "rgb(255, 208, 0)"
                });
            }

            
        });
    </script>

<?php $content = ob_get_clean(); ?>

<?php require("../template.php"); ?>