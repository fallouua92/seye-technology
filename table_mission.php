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
        <th>launch_date</th>
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
    echo "<tr><td>" . $row["mission_id"] . "</td><td>". $row["name"] . "</td><td>" . $row[ "destination"] . "</td><td>" . $row["launch_date"] . "</td><td>" . $row["type"] . "</td></tr>" $row["crew_size"] . "</td></tr>" $row["target_id"] . "</td><td>";
}
}
else{
    echo "0 results";
}    
