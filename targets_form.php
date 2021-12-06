<?php
include "connection.php";
$submitbutton= $_POST['submitbutton'];

if ($submitbutton){
  $id = $_POST["id"];
  $name= $_POST["name"];
  $first_mission = $_POST["first_mission"];
  $type= $_POST["type"];
  $no_missions = $_POST["no_missions"];


  $sql = "INSERT INTO targets(id, name, first_mission, type, no_missions) VALUES ($id, '$name', $first_mission, '$type', $no_missions)";

  if(!mysqli_query($connection, $sql)){
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
        <title>This is the Backend </title>
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
       <!--Bootstrap has been used here with CSS link-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--This is my JavaScript link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </head>
<body>
    <div class="alert alert-info">
      <strong>Let us know you agree to cookies!</strong> We use cookies to improve your experience on our Website. 
    </div>
    
    <div class="row">
        <div class="col d-flex justify-content-center">
            <h1>This is the Backend development Website </h1>
    </div>
    <div>
        <!--A navbar has been created here-->
    <div class="row">
        <div class="col-lg">
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" href="index.php">Home Page</a>
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
                    <a class="nav-link" href="attends_form.php">Attends form</a>
                  </li>
                  
            
              </ul>
        </div>   
        <h1>The targets form</h1>
          <!-- This is the form that I have created for submiting details-->
        <form action="demo_backend.php" method="POST">
        <div class= "form_id_name">id_name: <input type="integer" name="id_name"><br></div>
        <div class= "form_first_mission">first_mission: <input type="date" name="first_mission"><br></div>
        <div class= "form_type">type: <input type="text" name="type"><br></div>
        <div class= "form_no_missions">no_missions: <input type="integer" name="no_missions"><br></div>
        <div class= "sub_button"><input type="submit" name="submitbutton" value="Submit"/></div>
        </form>
    </body>
</html> 