<?php
    $uri = 'http://api.football-data.org/v2/matches?status=SCHEDULED';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: 305c37cae55d478789631eb31480e3a4';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $result = json_decode($response, true);
?>

<?php $title = "Soccer Predictor"; ?>

<?php ob_start(); ?>

<div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="public/images/soccer-stadium.jpg" alt="SLIDE">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="public/images/Ball-Field-Match-Football-Stadium-Soccer.png" alt="SLIDE">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="public/images/soccer-stadium_2.webp" alt="SLIDE">
        </div>
    </div>
    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carousel">
        <h3 class="fas fa-angle-left slide-arrow"></h3>
    </button>
    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carousel">
        <h3 class="fas fa-angle-right slide-arrow"></h3>
    </button>

</div>

<div class="main">
    <table class="predictions-table">
        <thead>
            <tr>
                <th></th>
                <th id="date-and-time-column">DATE & TIME</th>
                <th>HOME TEAM</th>
                <th>AWAY TEAM</th>
                <th>TIPS</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($result['matches'] as $key => $value) { ?>
                <tr>
                    <td><h3> &#x26BD;</h3></td>
                    <td> <?= $value['utcDate'] ?> </td>
                    <td class="team_logo"> <?= empty($value['homeTeam']) ? " - " : '<img src="'.'https://crests.football-data.org/'.$value['homeTeam']['id'].'.svg'.'" alt="">'.$value['homeTeam']['name'];  ?> </td>
                    <td class="team_logo"> <?= empty($value['awayTeam']) ? " - " : '<img src="'.'https://crests.football-data.org/'.$value['awayTeam']['id'].'.svg'.'" alt="">'.$value['awayTeam']['name']  ?> </td>
                    <td> <?= " -- " ?> </td>
                </tr>        
            <?php } ?>
        </tbody>
    </table>
</div>
<script>
    $(function(){
        $("#predictions-tab").css({
            color: "rgb(255, 208, 0)"
        });

        $("table").DataTable();
    });
</script>

<?php $content = ob_get_clean(); ?>

<?php require("views/template.php"); ?>