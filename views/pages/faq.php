<?php $title = "FAQs | Soccer Predictor"; ?>

<?php ob_start(); ?>
    
    <div class="faq-container">
        <div class="faq-header-title mb-3">
            <h5 id="title_faq">Frequently Asked Questions</h5>
        </div>
        <div class="question_reponse">
            <div class="question">What does 1, X, 2 mean ?</div>
            <div class="reponse">1(home team wins), X( teams draw), 2(away team wins)</div>
        </div>
        <div class="question_reponse">
            <div class="question">What does 1X, 12, X2 mean ?</div>
            <div class="reponse">1(home team wins or draws), 12(home team wins or away), X2(away team wins)</div>
        </div>
        <div class="question_reponse">
            <div class="question">The tips has changed. Why ?</div>
            <div class="reponse">It happed because the odds for the match has changed, therefore the tips changes as well</div>
        </div>
        <div class="question_reponse">
            <div class="question">Do you provide tennis, hockey horses tips ?</div>
            <div class="reponse">No we do not. We are soccer predictors</div>
        </div>
        <div class="question_reponse">
            <div class="question">I have won big money, how can I thank you ?</div>
            <div class="reponse">Congratulations to your win! You will make us happy if you stay connected to soccer predictors and tell your friends about us.</div>
        </div>
        <div class="question_reponse">
            <div class="question">How do I make comments or ask questions  ?</div>
            <div class="reponse">Please use our contact form on <a href="www.contact_link_project.net"> www.contact_link_project.net</a></div>
        </div>
        <div class="question_reponse">
            <div class="question">Do you provide fixed tips  ?</div>
            <div class="reponse">No we do not. Our tips are based on the team's current performance, player's injuries and mutual statistics</a></div>
        </div>
        <div class="question_reponse">
            <div class="question">Can I bet on soccer predictor ?</div>
            <div class="reponse">No you can't. We are not bookmakers. We offer soccer tips and matchs results.For betting please use reliable and trusted bookmakers</div>
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