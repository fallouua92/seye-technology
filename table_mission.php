<!DOCTYPE html>
<html>
<head>
    <!--CSS-->
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
     <!-- This is the table that I have created for the mission page to display data from the database-->
<tr> 
        
        <th>name</th>
        <th>destination</th>
        <th>launch_data</th>
        <th>type</th>
        <th>crew_size</th>
        <th>target_id</th>
</tr> 
<?php
// connect to the database
$conn = mysqli_connect("localhost","fallou","Fama2022#", "ua92backend");
if ($conn ->connect_error) {
    die("connection faild:". $conn-> connect_error);
}
// select all from the mission table
$sql = "SELECT * FROM mission";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $row["name"] . "</td><td>" . $row[ "destination"] . "</td><td>" . $row["launch_data"] . "</td><td>" . $row["type"] . "</td><td>" . $row["crew_size"] . "</td><td>" .  $row["target_id"] . "</td></tr>";
}
}
else{
    echo "0 results";
}    


?>
    </table>
    <center><a href="mission_form.php"><button>Return</button></a></center>
</body>
</html>