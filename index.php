<?php
session_start();
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="learn.css">
	<link rel="stylesheet" href="https://cdn.rawgit.com/hypergirl/FirstWebsite/a0e0efc4/log.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
</head>
<style>
.avatar{
	
	width:120px;
	text-align:center;
}
</style>
<body>

             <center> <header >
                <nav class="nav">
                 <h1 >Wings Of Education</h1>
                  <ul class="a">
                     <li><a href="log.php">Home</a></li>
                        <li><a href="qu-tuts">About</a></li>
                           <li><a href="testimonial.html" target="_self">Testimonials</a></li>
                   </ul>
                   <ul class="reg">
                   <div class="nav-login">
                   <?php
                   if(isset($_SESSION["u_id"]))
                   {
                   	
                   	echo '<form action="logout.php" method="POST">

               				<br><br><button type="submit" name="submit">Logout</button>
                   			</form>';



                   
                   }
                   else
                   {
                   	echo '<form action="login.inc.php" method="POST">
                <center><img src="avatar.png" class="avatar"/></center>       		
          <input type="text" name="uid" placeholder="Username/Email">
          <input type="password" name="pwd" placeholder="password">
          <button type="submit" name="login" id="login_btn">Login</button>
          </form>
          <a href="signup.php"><h2>Sign Up</h2></a>';
                   }
                   ?>


         

        </div>
                   
                   </ul>
                  </nav>
                 </header>
                 </center>
               <div id="divider"></div>

               <div class="imag">
               <br/><br/><br/>
                  <h1 class="top">Always wanted to follow your passion?</h1>
                  <h2 class="next"><pre>   Then come,</pre> 
                  <h2 class="next"><pre>           Weave your dream with us</pre></h2>



               </div>
