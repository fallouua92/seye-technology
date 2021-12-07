<html>
    <body> 
        <table>
            <tr>
                <th>astronaut_id</th>
                <th>Name</th>
                <th>no_missions</th>
            </tr>
            <?php 
            $conn = mysqli_connect("localhost", "fallou", "Fama2022#", "ua92backend");
            $sql = "SELECT * FROM astronaut";
            $result = $conn->query($sql);
            if ($result->num_roms > 0) {
                while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>" . $row["astronaut_id"] . "</td><td>" .  $row["astronaut_id"] . "</td><td>" .  $row["Name"] . "</td><td>" .  $row["no_missions"] . "</td><td>";
                }
            } 
            else {
                echo"No result";
            }
            $conn->close();
            ?>
       </table>
    </body>
</html>   