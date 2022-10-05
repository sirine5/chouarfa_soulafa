<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>E-courses</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <section id="formHolder">
       <div class="row">
          <!-- Brand Box -->
          <div class="col-sm-6 brand">  
             <div class="success-msg">
                <p>Great! You have successfully created your Profile</p>
                <a href="Courses.html" class="profile">Click For My Profile</a>
             </div>
          </div>
          <!-- Form Box -->
          <div class="col-sm-6 form">
             <!-- Login Form -->
             <div class="login form-peice switched">
                <form class="login-form" action="login.php" method="post">
                   <div class="form-heading">
                     <h2>Sign In</h2>
                   </div>
                   <div class="form-group">
                      <label for="loginemail">Email Address</label>
                      <input type="email" name="email" id="loginemail" required>
                   </div>
 
                   <div class="form-group">
                      <label for="loginPassword">Password</label>
                      <input type="password" name="mdp" id="loginPassword" required>
                   </div>
 
                   <div class="CTA">
                      <input type="submit" name="SUBMIT" value="Sign in">
                      <a href="#" class="switch">I'm New User</a>
                   </div>
                </form>
             </div><!-- End Login Form -->
 
             <!-- Signup Form -->
             <div class="signup form-peice">
                <form class="signup-form" action="signup.php" method="post">
                   <div class="form-heading">
                    <h2>Create Account</h2>
                   </div>
 
                   <div class="form-group">
                      <label for="name">Full Name</label>
                      <input type="text" name="username" id="name" class="name">
                      <span class="error"></span>
                   </div>
 
                   <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" name="emailAdress" id="email" class="email">
                      <span class="error"></span>
                   </div>
 
                   <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="pass">
                      <span class="error"></span>
                   </div>
 
                   <div class="form-group">
                      <label for="passwordCon">Confirm Password</label>
                      <input type="password" name="passwordCon" id="passwordCon" class="passConfirm">
                      <span class="error"></span>
                   </div>
 
                   <div class="CTA">
                      <input type="submit" name="SUBMIT" value="Signup Now" id="submit">
                      <a href="#" class="switch">I have an account</a>
                   </div>
                </form>
             </div><!-- End Signup Form -->
          </div>
       </div>
    </section>
 
 </div>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script  src="js/index.js"></script>
</body>
</html>