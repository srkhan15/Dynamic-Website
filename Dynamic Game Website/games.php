<?php
include("includes/header.inc");
include("includes/db_connect.inc");
include("includes/nav.inc");
?>



<main>

    <div>
        <h3>Games</h3>

        <div class="imag1">
            <img src="game.jpg" alt="game" width="250" height="150" id="imag1">
        </div>
        <aside>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Year</th>
                    <th>Price</th>
                </tr>

                <?php
                $sql = "select * from game";
                $result = $conn->query($sql);

                while ($row = $result->fetch_array()) {


                    print "<tr>";
                    echo "<td><a href='game.php?id={$row['game_id']}'>{$row['name']}</a></td>";
                    print "<td>{$row['category']}</td>";
                    print "<td>{$row['year']}</td>";
                    print "<td>{$row['price']}</td>";
                    print "</tr>";
                }
                ?>
            </table>
        </aside>
    </div>

</main>


<?php
$conn->close();
include("includes/footer.inc");
?>