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
                     <h3>Activites</h3>
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
				 <th>Ncc Head</th>
				 <th>Title</th>
				 <th>Description</th>
				
				 
				 </tr>
				 <?php
				 include("connection.php");
			  $sel="select * from activites";
			  $res=mysqli_query($conn,$sel);
			  while($row=mysqli_fetch_array($res))
			  {
				 $sel1="select * from ncchead where id='$row[nid]'";
				 $res1=mysqli_query($conn,$sel1); 
				 $row1=mysqli_fetch_array($res1)
				 ?>
				  <tr>
				 <td><?php echo $row1['name'];?></td>
				 <td><?php echo $row['subject'];?></td>
				 <td><?php echo $row['description'];?></td>

				 
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