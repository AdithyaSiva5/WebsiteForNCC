<?php

include("header.php");

?>
         <!-- end header section -->
         <!-- slider section -->
         <section class="slider_section ">
            <div class="slider_bg_box">
               <img src="images/ncc2.jpg" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
Our Pride                                    </span>
                                    <br>
                                 </h1>
                                 <p style="color:#fff;">
A few amongst us created their mark on the world stage by acheiving the uncommon. Meet these inspiring men and women                                 </p>
                                 <div class="btn-box">
                                   
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
Our Pride                                    </span>
                                    <br>
                                 </h1>
                                 <p style="color:#fff;">
A few amongst us created their mark on the world stage by acheiving the uncommon. Meet these inspiring men and women                                 </p>
                                 </p>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
Our Pride                                    </span>
                                    <br>
                                 </h1>
                                 <p style="color:#fff;">
A few amongst us created their mark on the world stage by acheiving the uncommon. Meet these inspiring men and women                                 </p>
                                 </p>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#customCarousel1" data-slide-to="1"></li>
                     <li data-target="#customCarousel1" data-slide-to="2"></li>
                  </ol>
               </div>
            </div>
         </section>
         <!-- end slider section -->
      </div>
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
Camp Details
               </h2>
            </div>
            <div class="row">
              <?php
			  include("connection.php");
			  $sel="select * from camp";
			  $res=mysqli_query($conn,$sel);
			  while($row=mysqli_fetch_array($res))
			  {
				  $a=$row['image'];
			  ?>
               <div class="col-md-4">
                  <div class="box ">
                     <div class="img-box">
                       <img src="admin/camp_tbl/uploads/<?php echo $a; ?>" style="height:100px; width:100px;">
                     </div>
                     <div class="detail-box">
                        <h5><?php echo $row['title']; ?>         </h5>
                        <p>
<?php echo $row['description']; ?>                 
         </p>
		 <p>Date:<?php echo $row['date']; ?>  </p>
                     </div>
                  </div>
               </div>
			   <?php
			   
			  }
			   ?>
            </div>
         </div>
      </section>
      <!-- end why section -->
      
      <!-- arrival section -->
      <section class="arrival_section">
         <div class="container">
            <div class="box">
               <div class="arrival_bg_box">
                  <img src="images/nccc.jpg" alt="">
               </div>
               <div class="row">
                  <div class="col-md-6 ml-auto">
                     <div class="heading_container remove_line_bt">
                        <h2>
                           #AIM OF NCC

                        </h2>
                     </div>
                     <p style="margin-top: 20px;margin-bottom: 30px;">
					 The ‘Aims’ of the NCC laid out in 1988 have stood
					 the test of time and continue to meet the requirements
					 expected of it in the current socio–economic scenario 
					 of the country. The NCC aims at developing character, comradeship,
					 discipline, a secular outlook, the spirit.
                     </p>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end arrival section -->
      
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>Year Plan</span>
               </h2>
            </div>
            <div class="row">
			<?php
			  include("connection.php");
			  $sel="select * from yearplan";
			  $res=mysqli_query($conn,$sel);
			  while($row=mysqli_fetch_array($res))
			  {
				  $a=$row['image'];
			?>
			
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <!--<div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Men's Shirt
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>-->
                     <div class="img-box">
					    <img src="admin/yearplan_tbl/uploads/<?php echo $a; ?>">

                     </div>
                     <div class="detail-box">
                        <h5>
                           Title
                        </h5>
                        <h6>
						<?php echo $row['title']; ?>
                        </h6>
						
                     </div>
					 <div class="detail-box">
                        <h5>
                           Description
                        </h5>
                        <h6>
						<?php echo $row['description']; ?>
                        </h6>
						
                     </div>
					 <div class="detail-box">
                        <h5>
                           Date
                        </h5>
                        <h6>
						<?php echo $row['date']; ?>
                        </h6>
						
                     </div>
                  </div>
               </div>
              <?php
			  }
			  
			  ?>
              
           
            </div>
            
         </div>
      </section>
	   <section class="product_section layout_padding">
         <div class="container">
             <div class="heading_container heading_center">
               <h2>
                  NCC HEAD
               </h2>
            </div>
            <div class="row">
			<?php
			  include("connection.php");
			  $sel="select * from ncchead";
			  $res=mysqli_query($conn,$sel);
			  while($row=mysqli_fetch_array($res))
			  {
				  $a=$row['image'];
				 $sel1="select * from department";
			  $res1=mysqli_query($conn,$sel1); 
				$row1=mysqli_fetch_array($res1)  
			?>
			
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <!--<div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Men's Shirt
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>-->
                     <div class="img-box">
					    <img src="admin/ncchead_tbl/uploads/<?php echo $a; ?>">

                     </div>
                     <div class="detail-box">
                        <h5>
                           Name
                        </h5>
                        <h6>
						<?php echo $row['name']; ?>
                        </h6>
						
                     </div>
					 <div class="detail-box">
                        <h5>
                           Email
                        </h5>
                        <h6>
						<?php echo $row['email']; ?>
                        </h6>
						
                     </div>
					 <div class="detail-box">
                        <h5>
                           Address
                        </h5>
                        <h6>
						<?php echo $row['address']; ?>
                        </h6>
						
                     </div>
					  <div class="detail-box">
                        <h5>
                           Department
                        </h5>
                        <h6>
						<?php echo $row1['department']; ?>
                        </h6>
						
                     </div>
                  </div>
               </div>
              <?php
			  }
			  
			  ?>
              
           
            </div>
            
         </div>
      </section>
      <!-- end product section -->


<?php

include("footer.php");

?>
  