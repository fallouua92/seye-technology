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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Pet Website</title>
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
            <h1>Pet Website</h1>
    </div>
    <div>
        <!--another row and column for the navbar-->
    <div class="row">
        <div class="col-lg">
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Home Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="dogs.html">dogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cats.html">Cats</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="pets.html">Pets Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="shoppingcart/cart.html">Shopping Cart</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
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