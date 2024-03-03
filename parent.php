 <?php
	include("header.php");
	
	?>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Register</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form method="POST" onsubmit ="return validateForm()">
                        <fieldset>
						   <input type="Name" required placeholder="Name" name="Name" required />
                           <input type="email" required placeholder="Enter your email address" name="email" required />
                           <input type="password" required placeholder="Password"  id = "pswd1"  name="password" required />
						   <span id = "message1" style="color:red"> </span>
						   <input type="password" required placeholder="Confirm Password" id = "pswd2"  name="confirm password" required />
                           	<span id = "message2" style="color:red"> </span>

						   <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                     </form>
					 
					 	<?php
						include("connection.php");

							error_reporting(0);
							if(isset($_POST['submit']))
					         
							{   
							    $name=$_POST['Name'];
								$email=$_POST['email'];

								$password=$_POST['password'];
								$confirm_password=$_POST['confirm_password'];
								
					
					      	  
								$ins="INSERT INTO parentregister(name,email,password,confirm_password)
								VALUES('$name','$email','$password','$confirm_password')";
								
		                        $res=mysqli_query($conn,$ins);
								if($res)
								{
									echo "<script>
									alert('Successfully inserted');
									
									
									</script>";
									
								}
								
							}
							?>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  <script>  
function validateForm() {  
    //collect form data in JavaScript variables  
    var pw1 = document.getElementById("pswd1").value;  
    var pw2 = document.getElementById("pswd2").value;  
   
    //check empty first name field  
    
    
    //check empty password field  
    if(pw1 == "") {  
      document.getElementById("message1").innerHTML = "**Fill the password please!";  
      return false;  
    }  
    
    //check empty confirm password field  
    if(pw2 == "") {  
      document.getElementById("message2").innerHTML = "**Enter the password please!";  
      return false;  
    }   
     
    //minimum password length validation  
    if(pw1.length <4) {  
      document.getElementById("message1").innerHTML = "**Password length must be atleast 4 characters";  
      return false;  
    }  
  
    //maximum length of password validation  
    if(pw1.length >4) {  
      document.getElementById("message1").innerHTML = "**Password length must not exceed 4 characters";  
      return false;  
    }  
    
    if(pw1 != pw2) {  
      document.getElementById("message2").innerHTML = "**Passwords are not same";  
      return false;  
    } else {  
      alert (" successfully Registered");  
    }  
 }  
</script>
      <!-- end why section -->
      <!-- arrival section -->
      
      <!-- end arrival section -->
      <!-- footer section -->
    <?php
	include("footer.php");
	
	?>