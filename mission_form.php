<!doctype html>
<html>
    <head>
        <title>This Backend PHP Form</title>
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

<!-- This the div with class row and column for the header -->
<div class="row">
        <div class="col d-flex justify-content-center bg-dark text-white">
            <h1>Mission form</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg">
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="astronaut_form.php">Astronaut form</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="attends_form.php">Attends form</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="targets_form.php">Targets form</a>
                </li>
              </ul>
        </div>

        <h1>This is the information form</h1>
        <form action="demo_backend.php" method="POST">
        <div class= "form_name">Name: <input type="text" name="name"><br></div>
        <div class= "form_email">E-mail: <input type="text" name="email"><br></div>
        <div class= "form_address">Address: <input type="text" name="address"><br></div>
         <div class= "sub_button"><input type="submit"></div>
        </form>
    </body>
</html> 