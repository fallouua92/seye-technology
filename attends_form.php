<?php
include "connection.php";
$submitbutton= $_POST['submitbutton'];

if ($submitbutton){
  $mission_name = $_POST["name"];
  $id = $_POST["astronaut_id"];


  $sql = "INSERT INTO attends(mission_id, astronaut_id) VALUES ('$mission_name', $id)";
  
// connection 
  if(!mysqli_query($connection, $sql)){
      die("Error:".mysqli_error($connection));
  }
  // echo to disply data inserted in the browser
  else{
      echo "Data Inserted";
  }
// Select all from the mission table
  $get_mission_crew = "SELECT * FROM mission WHERE mission_id=$mission_name";
  $query = mysqli_query($connection, $get_mission_crew);
  $result = mysqli_fetch_assoc($query);
  $crew_size = $result['crew_size'];
  $crew_size = $crew_size+1;
  $set_mission_crew = "UPDATE mission SET crew_size=$crew_size WHERE mission_id=$mission_name";

  if(!mysqli_query($connection, $set_mission_crew)){
    die("Error:".mysqli_error($connection));
  }
  else{
    echo "Data Inserted";
  }
// Select all from the astronaut table
  $get_mission_no = "SELECT * FROM astronaut WHERE astronaut_id=$id";
  $query = mysqli_query($connection, $get_mission_no);
  $result2 = mysqli_fetch_assoc($query);
  $mission_no = $result2['no_missions'];
  $mission_no = $mission_no+1;
  $set_mission_no = "UPDATE astronaut SET no_missions=$mission_no WHERE astronaut_id=$id";

  if(!mysqli_query($connection, $set_mission_no)){
    die("Error:".mysqli_error($connection));
  }
  else{
    echo "Data Inserted";
  }

}
?>

<!doctype html>
<html>
    <head>
        <title>This Backend Website</title>
       
        <body>
        <body style="background-color: #33ffff"> </body>
        <style>
            body {
                background-color: lightgrey;
                text-align: center;
            }
            .form_name{  
                padding: 10px;
            }
            .form_address{ 
                padding: 10px;
            }
            .form_email{  
                padding: 10px;
            }
            .sub_button{  
                padding: 
            }
        </style>
    </head>
    <body>
       <!-- bootstrap with CSS link-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--JavaScript link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </head>
<body>
    <!--I have used the div here with class row and column for the header of the page-->
    <div class="alert alert-info">
      <strong>Let us know you agree to cookies!</strong> We use cookies to improve your experience on our Website. 
    </div>
    <!-- Another div with classe here to justify content-center-->
    <div class="row">
        <div class="col d-flex justify-content-center">
            <h1>This is the Backend development Website</h1>
    </div>
    <div>
       <!--A navbar has been created here-->
    <div class="row">
        <div class="col-lg">
            <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                  <a class="nav-link " href="index.php">Home Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="targets_form.php">Targets form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mission_form.php">Mission form</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="astronaut_form.php">Astronaut form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="attends_form.php">Attends form</a>
                  </li>
                
              </ul>
        </div>   
        <h1>This Attends form</h1>
           <!-- This is the form that I have created for attends form-->
        <form action="attends_form.php" method="POST">
        <div class= "form_mission_name">mission Id: <input type="Integer" name="name" required><br></div>
        <div class= "form_astronaut_id">astronaut_id: <input type="integer" name="astronaut_id"required><br></div>
         <div class= "sub_button"><input type="submit" name="submitbutton" value="Submit" required></div>
        </form>
        <center><a href="table_attends.php"><button>Table Entry</button></a></center>
    </body>
</html> 