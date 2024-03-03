<?php

include("header.php");

?>
  
         <!-- end header section -->
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Login</h3>
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
                     <form action="check.php" method="post">
                        <fieldset>
                           <input type="email" placeholder="Enter your Email id" name="email" required />
                           <input type="password" placeholder="Enter your Password" name="password" required />
                           <select class="form-control" name="type" required>
									<option disabled=""  selected="" value="">Select Type</option>
									<option value="Admin">Admin</option>
									<option value="Ncchead">Ncchead</option>
									<option value="Staff">Staff</option>
									<option value="Student">Student</option>
									<option value="Parent">Parent</option>

								</select>
								<br>
                           <input type="submit"  name="submit" value="Login" />

                        </fieldset>

                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->
      <!-- arrival section -->
     
      <!-- end arrival section -->
      <!-- footer section -->
    <?php

include("footer.php");

?>
  