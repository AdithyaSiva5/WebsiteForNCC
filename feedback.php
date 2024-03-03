 <?php
 
	include("header.php");
	
	?>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Feedback</h3>
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
                     <form method="POST">
                        <fieldset>
                           <input type="text" required placeholder="Enter subject" name="subject" required />
                           <textarea required placeholder="Enter your message" name="feedback" required></textarea>
                           <input type="submit" name="submit" value="Submit" />
                        </fieldset>
                     </form>
					 
					 	<?php
						include("connection.php");

							error_reporting(0);
							if(isset($_POST['submit']))
					         
							{
								$studid=$_SESSION['studid'];

								$subject=$_POST['subject'];
								$feedback=$_POST['feedback'];
								
					
					      	  
								$ins="INSERT INTO feedback(studid,subject,feedback)
								VALUES('$studid','$subject','$feedback')";
								
		                        $res=mysqli_query($conn,$ins);
								if($res)
								{
									echo "<script>
									alert('Feedback added Successfully');
									
									
									</script>";
									
								}
								
							}
							?>
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