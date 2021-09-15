<?php
    require("partials/menu.php");
?>

<div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="images/carousel_img_1.jpg" alt="SLIDE">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="images/carousel_img_2.jpg" alt="SLIDE">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="images/carousel_img_3.jpg" alt="SLIDE">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="images/carousel_img_4.jpg" alt="SLIDE">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="images/carousel_img_5.jpg" alt="SLIDE">
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
                <th>DATE & TIME</th>
                <th>HOME TEAM</th>
                <th></th>
                <th>AWAY TEAM</th>
                <!-- <th>HALF TIME</th>
                <th>FULL TIME</th> -->
                <th>TIPS</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                for($i = 0; $i < 5; $i++){
                    ?>
                        <tr>
                            <td><h3> &#x26BD;</h3></td>
                            <td>9-15T18:45</td>
                            <td>Bristol City FC</td>
                            <td>VS</td>
                            <td> Luton Town FC</td>
                            <td>5-0</td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</div>

<?php
    require("partials/footer.php");
?>