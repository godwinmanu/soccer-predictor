<?php $title = "Results | Soccer Predictor"; ?>

<?php ob_start(); ?>

   <div class="main">

        <!-- <div class="filters">
            <select name="hour-filter" id="hour-filter">
                <option value="last 24 hours" selected>Last 24 hours</option>
                <option value="last 12 hours">Last 12 hours</option>
                <option value="last 6 hours">Last 6 hours</option>
                <option value="last 3 hours">Last 3 hours</option>
                <option value="last 1 hour">Last 1 hour</option>
            </select>

            <select name="competition-filter" id="competition-filter">
                <option value="champion's league" selected="">Champion's League</option>
            </select>
        </div> -->

        <table class="predictions-table">
            <thead>
                <tr>
                    <th></th>
                    <th>DATE & TIME</th>
                    <th>MATCH</th>
                    <th>HALF TIME</th>
                    <th>FULL TIME</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for($i = 0; $i < 5; $i++){
                        ?>
                            <tr>
                                <td><h3> &#x26BD;</h3></td>
                                <td>JULY 25, 14:30</td>
                                <td>MALAYSIA <span class="text-danger"> VS. </span> DARUSSALAM</td>
                                <td>3 : 0</td>
                                <td>6 : 1</td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(function(){
            $("#results-tab").css({
                color: "rgb(255, 208, 0)"
            });
        });
    </script>

<?php $content = ob_get_clean(); ?>

<?php require("../template.php"); ?>