<?php
include "validation.php";
include "connection.php";
$submitbutton= $_POST['submitbutton'];

if ($submitbutton){
  $name = $_POST["name"];
  $destination = $_POST["destination"];
  $launch = $_POST["launch_date"];
  $type = $_POST["type"];
  $crew = $_POST["crew_size"];
  $target = $_POST["target_id"];


  $sql = "INSERT INTO mission( name, destination, launch_data, type, crew_size, target_id) VALUES ( '$name', '$destination', '$launch', '$type', '$crew', '$target
  ')";
// connection 
  if(!mysqli_query($connection, $sql)){
      die("Error:".mysqli_error($connection));
  }
  // echo to display data inseted in the browser
  else{
      echo "Data Inserted";
  }
}
?>

<!doctype html>
<html>
    <head>
        <title>This is the Backend Website</title>
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
         <body style="background-color: #33ffff"> </body>
        <!--This is my bootstrap with CSS link-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--This is my JavaScript link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
<body>
    <!--I have used the div here with class row and column for the header of the page-->
    <div class="alert alert-info">
      <strong>Let us know you agree to cookies!</strong> We use cookies to improve your experience on our Website. 
    </div>
    
    <div class="row">
        <div class="col d-flex justify-content-center">
            <h1>This is the Backend development Website</h1>
        </div>
    </div>
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
                    <a class="nav-link active" href="mission_form.php">Mission form</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link " href="astronaut_form.php">Astronaut form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="attends_form.php">Attends form</a>
                  </li>
              </ul>
        </div>  
       </div>
       
        <h1>The Mission form</h1>
          <!-- This is the form that I have created for mission form-->
        <form action="mission_form.php" method="POST">
        <div class= "form_name">Name: <input type="text" name="name" required><br></div>
        <div class= "form_destination">destination: <input type="text" name="destination" required><br></div>
        <div class= "form_launch_date">launch_date: <input type="date" name="launch_date" required><br></div>
        <div class= "form_type">type: <input type="text" name="type" required><br></div>
        <div class= "form_crew_size">crew_size: <input type="number" name="crew_size" required><br></div>
        <div class= "form_target_id">target_id: <input type="integer" name="target_id" required><br></div>
        <div class= "sub_button"><input type="submit" name="submitbutton" value="Submit"/></div>
        </form>
        <center><a href="table_mission.php"><button>Table Entry</button></a></center>
    </body>
</html> 