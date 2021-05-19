<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cvmsaid']==0)) {




  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>CVMS</title>

    

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
       

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    
<h4 class="m-t-0 header-title">Between Dates Reports</h4>
                                    <?php
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];

?>
<h5 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
<hr />
  
                                    <table class="table table-borderless table-striped table-earning">
                                         <thead>
                                        <tr>
                                            <tr>
                  <th>S.NO</th>
            
                  <th>Full Name</th>
              
              <th>Contact Number</th>
              <th>Email</th>
			  <th>Enter Time</th>
			  <th>Out Time</th>
                   <th>Action</th>
                </tr>
                                        </tr>
                                        </thead>
                                       <?php
$ret=mysqli_query($con,"select *from visitor where date(EnterDate) between '$fdate' and '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['FullName'];?></td>
                  <td><?php  echo $row['MobileNumber'];?></td>
                <td><?php  echo $row['Email'];?></td>
				<td><?php  echo $row['EnterDate'];?></td>
				<td><?php  echo $row['outtime'];?></td>
                  <td><a href="visitor-detail.php?editid=<?php echo $row['ID'];?>" title="View Full Details"><i class="fa fa-edit fa-1x"></i></a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
                                    </table>
                                </div>
                            </div>
                          
                        </div>
                        
                        

          </div>
                </div>
            </div>
        </div>

    </div>
   
    <script src="js/main.js"></script>

</body>

</html>
<?php }  ?>
