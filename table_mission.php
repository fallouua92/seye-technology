<!DOCTYPE html>
<html>
<head>
    
    <title>This is the database table</title>
</head>
<body>

    <table> 
    
<tr> 
        <th>mission_id</th>
        <th>Name</th>
        <th>Destination</th>
        <th>launch_date</th>
        <th>Type</th>
        <th>Crew_size</th>
        <th>Target_id</th>
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
    echo "<tr><td>" . $row["mission_id"] . "</td><td>". $row["Name"] . "</td><td>" . $row[ "Destination"] . "</td><td>" . $row["Launch_date"] . "</td><td>" . $row["Type"] . "</td></tr>" $row["Crew_size"] . "</td></tr>" $row["Target_id"] . "</td><td>";
}
}
else{
    echo "0 results";
}    
