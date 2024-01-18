<?php

include("includes/header.inc");
include("includes/db_connect.inc");
include("includes/nav.inc");

$developername = array();
$_SESSION['dev'] = $developername;
?>



<main>


    <div>
        <div id="demo" class="carousel slide w-50 mx-auto" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">

                <?php
                $sql = "select * from game order by game_id desc LIMIT 4";

                $counter = 1;
                $result = $conn->query($sql);

                while ($row = $result->fetch_array()) {

                    print "<div class='carousel-item";
                    if ($counter == 1) {
                        print ' active';
                    }
                    print "'>";
                    echo "<img src='game_images/{$row['image']}' width='500' height='300'>";

                    print "</div>";
                    $counter++;
                }
                ?>

            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <div class="Para">
            <h2>
                About our Shop
            </h2>

            <p>The World of Games was orignally established in 1985 in Melbourne. The shop specialised in selling
                board games, puzzles, etc. With the invention of computers and the Internet, our focus shifted
                towards computer games.
                <br>
                <br>
                Currently our shop is the leading online store selling hundreds of games a day. We have the best
                selection of modern video games.
            </p>
        </div>
    </div>
</main>
<?php
include("includes/footer.inc");
?>