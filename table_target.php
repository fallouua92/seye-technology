<!DOCTYPE html>
<html>
<head>
    
    <title>This is the database table</title>
</head>
<body>
    
</body>
    <table> 
<th> 
        <th>id</th>
        <th>name</th>
        <th>first_mission</th>
        <th>type</th>
        <th>no_mission</th>
</th> 
<?php
$conn = mysqli_connect("localhost","admin","Fama2022#", "ua92backend");
if ($conn ->connect_error) {
    die("connection faild:". $conn-> connect_error);
}

$sql = "SELECT * FROM targets";
$result = mysqli_query($conn, $sql);

if (mysql_num_rows($result) > 0){

while ($row = mysql_fetch_assoc($result)){
    echo "<tr><td>" . $row["id"] . "</td><td>". $row["name"] . "<td><td>" . $row[ "first_mission"] . "</td><td>" . $row["type"] . "</td><td>" . $row["no_mission"] . "</td></td>";
}    


?>
    </table>

</html>