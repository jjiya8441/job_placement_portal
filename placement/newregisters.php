<!doctype html>
<html lang="en"> 
  <head> 
    <title>
        Register as student 
    </title>
    <link rel="stylesheet" href="./style1.css">
   </head>
  <body>
    <div class="container">
      <a class="nav-link active" aria-current="page" href="homepg.html"> BACK TO HOME </a>
    <div class="signup-box">
      <h1>Sign-up</h1>
      <form action="connect.php" method="post">
        <label> Name </label>
        <input type="text" name="name" placeholder="Name">
        <label> Email</label>
        <input type="email" name="email" lplaceholder="Email">
        <label> Age</label>
        <input type="age" name="age" placeholder="age">
        <label>Gender</label>
        <input type="gender" name="gender" placeholder="Gender">
        <label> Current Education</label>
        <input type="text" name="currenteducation" placeholder="CurrentEducation">
        <label>Password</label>
        <input type="text" name="password" placeholder="password">
        <button class ="signup-button" name="submit">Sign-up</button> 
      </form>
      <p> By clicking the signup button you agree to our <br>
      <a href="#"> Terms and Conditions</a> and <a href="#"> Policies Privacy

      </a></p>
    </div>
    <p class="para-2"> Already have an account?<a href="newsignin.php">Login </a></p>
  </body>
  
    
  
   