<!DOCTYPE html>
<html>
<title>This is the database table</title>
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
        <!-- This is the table that I have created for the attends page to display data from the database-->
<tr>  
    
<tr> 
        <th>mission_id</th>
        <th>astronaut_id</th>
        
</tr> 
<?php
// connect to the local host
$conn = mysqli_connect("localhost","fallou","Fama2022#", "ua92backend");
if ($conn ->connect_error) {
    die("connection faild:". $conn-> connect_error);
}
// select all from the attends table
$sql = "SELECT * FROM attends";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $row["mission_id"] . "</td><td>". $row["astronaut_id"] . "</td><td>" ;
}
}
else{
    echo "0 results";
}    
 
?>
    </table>
</body>
</html>