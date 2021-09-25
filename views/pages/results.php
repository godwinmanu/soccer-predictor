<?php
    $uri = 'http://api.football-data.org/v2/matches/';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: 305c37cae55d478789631eb31480e3a4';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $result = json_decode($response, true);
?>

<?php $title = "Results | Soccer Predictor"; ?>

<?php ob_start(); ?>

   <div class="main" id="tab">
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

        <table class="results-table">
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

                <?php foreach ($result['matches'] as $key => $value) { ?>
                    <tr>
                        <td><h3> &#x26BD;</h3></td>
                        <td> <?= $value['status'] != "SCHEDULED" ? $value['status'] : $value['utcDate'] ?> </td>
                        <td class="team_logo"> <?= empty($value['homeTeam']) ? "- VS -" : '<img src="'.'https://crests.football-data.org/'.$value['homeTeam']['id'].'.svg'.'" alt="">'.$value['homeTeam']['name'] ." vs " . '<img src="'.'https://crests.football-data.org/'.$value['awayTeam']['id'].'.svg'.'" alt="">'.$value['awayTeam']['name']  ?> </td>
                        <td> <?= $value['score']['halfTime']['homeTeam'] ." - ". $value['score']['halfTime']['awayTeam'] ?> </td>
                        <td> <?= $value['score']['fullTime']['homeTeam'] ." - ". $value['score']['fullTime']['awayTeam'] ?> </td>
                    </tr>        
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        $(function(){
            let userScreenWidth = screen.width;

            if(userScreenWidth < 992){
                $("#results-tab").parent().css({
                    backgroundColor: "#64b000"
                });
            }
            else{
                $("#results-tab").css({
                    color: "rgb(255, 208, 0)"
                });
            }

            $(".main").css({
                paddingTop: "170px"  
            });
            
            $("table").DataTable();
        });
    </script>

<?php $content = ob_get_clean(); ?>

<?php require("../template.php"); ?>