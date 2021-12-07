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
    
<tr> 
        <th>astronaut_id</th>
        <th>Name</th>
        <th>no_missions</th>
        
</tr> 
<?php
$conn = mysqli_connect("localhost","fallou","Fama2022#", "ua92backend");
if ($conn ->connect_error) {
    die("connection faild:". $conn-> connect_error);
}

$sql = "SELECT * FROM astronaut";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $row["astronaut_id"] . "</td><td>". $row["Name"] . "</td><td>" . $row[ "no_missiona"] . "</td><td>" ;
}
}
else{
    echo "0 results";
}    

?>
    </table>
</body>
</html>