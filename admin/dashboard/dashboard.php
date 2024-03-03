<?php
error_reporting(0);
$status=$_REQUEST['status'];
if ($status == "logout")
{
    session_start();
    session_unset();
    session_destroy();
	header("location:../login/login.php");
}
?>
<?php
include("../common/menu.php");
	
?>


    <style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
</style>

<style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#FFECF4;
padding:10px;	
}


#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#F36;
padding:10px;	
}
.table
{
margin-bottom:10px;
background:#E6F4FF;	
}
.sep
{
height:30px;
background:#666;	
}
</style>
       


        <div class="content" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                                             
                            </div>
                            <div class="content all-icons">
                                <div class="row" style=" /*background-image: url(Bugs.jpg);*/ ">
                                            
                                     <?php
   	                                    session_start();

	                                   
	                                   if($_SESSION['usertype']=="Admin")
									   {
	                                    ?>      
                              
                                <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../staff_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-users"></i>
                                      <input type="text" value="OFFCIE STAFF">
                                    </div></a>
                                  </div>
                                   
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../ncchead_tbl/select.php"><div class="font-icon-detail"><i class="pe-7s-map-marker"></i>
                                      <input type="text" value="NCC HEAD ">
                                    </div></a>
                                  </div>
					            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../viewexpense_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-next"></i>
                                      <input type="text" value="VIEW EXPENSES">
                                    </div></a>
                                  </div>
								   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../viewactivity_tbl/select.php"> <div class="font-icon-detail"><i class="pe-7s-map-marker"></i>
                                      <input type="text" value="VIEW ACTIVITES">
                                    </div></a>
                                  </div>
								   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../viewcamp_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-star"></i>
                                      <input type="text" value="CAMP REPORTS">
                                    </div></a>
                                  </div>
								   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../viewyearplan_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-refresh-2"></i>
                                      <input type="text" value="VIEW YEAR PLAN">
                                    </div></a>
                                  </div>
								  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../department_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-cash"></i>
                                      <input type="text" value="ADD DEPARTMENT">
                                    </div></a>
                                  </div>
								 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../viewattendence_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-cash"></i>
                                      <input type="text" value="VIEW ATTENDENCE">
                                    </div></a>
                                  </div>
								 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../viewstudent_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-cash"></i>
                                      <input type="text" value="VIEW STUDENTS">
                                    </div></a>
                                  </div>
								  
								   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../feedback_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-cash"></i>
                                      <input type="text" value="VIEW FEEDBACK">
                                    </div></a>
                                  </div>
                               <?php
							   }
							   elseif($_SESSION['usertype']=="Ncchead")
							   {
							   ?>
								  

								  
								  
								   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../student_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-user"></i>
                                      <input type="text" value="STUDENT">
                                    </div></a>
                                  </div>
								   
                               <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../viewnotify_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-note"></i>
                                      <input type="text" value=" VIEW NOTIFICATION">
                                    </div></a>
                                  </div>
								   
                                <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../yearplan_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-ticket"></i>
                                      <input type="text" value="ADD YEAR PLAN">
                                    </div></a>
                                  </div>
								   
                               <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../camp_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-cash"></i>
                                      <input type="text" value="ADD CAMP DETAILS"> 
                                    </div></a>
                                  </div>
                                 
								<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../activity_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-cash"></i>
                                      <input type="text" value="ADD ACTIVITES">
                                    </div></a>
                                  </div>
								  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../attendence_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-cash"></i>
                                      <input type="text" value="ADD ATTENDENCE">
                                    </div></a>
                                  </div>
								  
								  
								  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../expense_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-cash"></i>
                                      <input type="text" value="ADD EXPENSE">
                                    </div></a>
                                  </div>
								  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../feedback_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-cash"></i>
                                      <input type="text" value="VIEW FEEDBACK">
                                    </div></a>
                                  </div>
								 <?php
							   }
							   elseif($_SESSION['usertype']=="Staff")
							   {
							   ?>  
								  
								  
								  
								   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../viewstudent_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-user"></i>
                                      <input type="text" value="VIEW STUDENT">
                                    </div></a>
                                  </div>
								   
                               <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../exam_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-note"></i>
                                      <input type="text" value=" EXAM NOTIFICATION">
                                    </div></a>
                                  </div>
								   
                                <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../othernotify_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-ticket"></i>
                                      <input type="text" value="OTHER NOTIFICATION">
                                    </div></a>
                                  </div>
								   
                               <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../feedback_tbl/select.php">    <div class="font-icon-detail"><i class="pe-7s-cash"></i>
                                      <input type="text" value="VIEW FEEDBACK">
                                    </div></a>
                                  </div>
								  
								  
                            <?php
							   }
							   else
							   {
								   
							   }
							   ?>
								   
                                  </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	

</html>
