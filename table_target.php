<!DOCTYPE html>
<html>
<title>This is the database table</title>
<head>
<style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
        color: #ff6666;
        font-family: monospace;
        font-size: 25px;
        text-align: letf;
    }
    th {
        background-color: 	 #99ff33;
        color: white;
    }
    th:nht-child(even) {background-color: #4d79ff;}
    </style>
    
</head>

<body>

    <table width ="100px" border ="2px"> 

 <!-- This is the table that has been created to display data from the database using HTML table -->  
<tr> 
        <th>id</th>
        <th>name</th>
        <th>first_mission</th>
        <th>type</th>
        <th>no_mission</th>
</tr> 
<?php
// connection
$conn = mysqli_connect("localhost","fallou","Fama2022#", "ua92backend");
if ($conn ->connect_error) {
    die("connection faild:". $conn-> connect_error);
}

$sql = "SELECT * FROM targets";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $row["id"] . "</td><td>". $row["Name"] . "</td><td>" . $row[ "first_mission"] . "</td><td>" . $row["type"] . "</td><td>" . $row["no_missions"] . "</td></tr>";
}
}
else{
    echo "0 results";
}    


?>
    </table>
</body>
</html>