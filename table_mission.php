<!DOCTYPE html>
<html>
<head>
    
    <title>This is the database table</title>
</head>
<body>

    <table> 
    
<tr> 
        <th>mission_id</th>
        <th>name</th>
        <th>destination</th>
        <th>launch_data</th>
        <th>type</th>
        <th>crew_size</th>
        <th>target_id</th>
</tr> 
<?php
$conn = mysqli_connect("localhost","fallou","Fama2022#", "ua92backend");
if ($conn ->connect_error) {
    die("connection faild:". $conn-> connect_error);
}

$sql = "SELECT * FROM mission";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $row["mission_id"] . "</td><td>". $row["Name"] . "</td><td>" . $row[ "destination"] . "</td><td>" . $row["launch_data"] . "</td><td>" . $row["type"] .  $row["crew_size"] .  $row["target_id"] . "</td></tr>";
}
}
else{
    echo "0 results";
}    


?>
    </table>
</body>
</html>