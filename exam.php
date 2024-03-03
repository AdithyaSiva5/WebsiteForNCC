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
                     <h3>Exam Notification</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            
            <div class="row">
               <div class="col-12">
                 <table class="table">
				 <tr>
				 <th>Title</th>
				 <th>Description</th>
				 <th>Date</th>
				
				 
				 </tr>
				 <?php
				 include("connection.php");
			  $sel="select * from exam";
			  $res=mysqli_query($conn,$sel);
			  while($row=mysqli_fetch_array($res))
			  {
				 
				 ?>
				  <tr>
				 <td><?php echo $row['title'];?></td>
				 <td><?php echo $row['description'];?></td>
				 <td><?php echo $row['date'];?></td>

				 
				 </tr>
				 <?php
				 }
				 
				 ?>
				 
				 </table>
               </div>
            </div>
            
         </div>
      </section>
	  
	  
	      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Other Notification</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
	     <section class="product_section layout_padding">
         <div class="container">
            
            <div class="row">
               <div class="col-12">
                 <table class="table">
				 <tr>
				 <th>Title</th>
				 <th>Description</th>
				 <th>Date</th>
				
				 
				 </tr>
				 <?php
				 include("connection.php");
			  $sel="select * from othernotify";
			  $res=mysqli_query($conn,$sel);
			  while($row=mysqli_fetch_array($res))
			  {
				 
				 ?>
				  <tr>
				 <td><?php echo $row['title'];?></td>
				 <td><?php echo $row['description'];?></td>
				 <td><?php echo $row['date'];?></td>

				 
				 </tr>
				 <?php
				 }
				 
				 ?>
				 
				 </table>
               </div>
            </div>
            
         </div>
      </section>
      <!-- end product section -->
      <!-- footer section -->
<?php
include("footer.php");

?>