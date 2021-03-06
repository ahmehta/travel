<?php 
require 'db.php';
session_start();
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style2.css">  

</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in
        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
           require 'register.php';
        
    }
}
?>

<body>
<h1>
            <a href="index.html">
              <img src="images/logo.png" alt="Your Happy Family"><!--PUT IMAGE LOGO -->
            </a>
          </h1>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#register">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">     
        <div id="login">   
          <h1>Hello Again!</h1>
          
          <form action="Logon.php" method="POST"  autocomplete="off">
          
            <div class="field-wrap">
           <input type="email" required autocomplete="off" name="email" placeholder="Email Address*" />
          </div>
          
          <div class="field-wrap">
           <input type="password" required autocomplete="off" name="password" placeholder="Password*" />
          </div>
         <button type="submit" class="button button-block" name="login"/>Log In</button>
          
          </form>

        </div>

        <div id="register">   
          <h1>Sign Up with Us</h1>
          
           <form action="Logon.php" method="post"  autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
            <input type="text" required autocomplete="off"  name='firstname' placeholder="First Name*" />
            </div>
        
            <div class="field-wrap">
              <input type="text"required autocomplete="off" name='lastname' placeholder="Last Name*"/>
            </div>
          </div>

          <div class="field-wrap">
            <input type="email" required autocomplete="off" name='email' placeholder="Email Address*"/>
          </div>
          
          <div class="field-wrap">
            <input type="password" required autocomplete="off" name='password' placeholder="Password*"/>
          </div>
          
          <button type="submit"  name="register" class="button button-block" />Get Started</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
