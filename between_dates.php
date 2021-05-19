<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cvmsaid']==0)) {
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">


    <!-- Title Page-->
    <title>CVSM Reports</title>

    

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
                                <div class="card">
                                    <div class="card-header">
                                        <strong></strong>Between Date-Time Reports
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" enctype="multipart/form-data" class="form-horizontal" name="bwdatesreport" action="between_dates_details.php">
                                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

   
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">From Date_Time (Format:2021-01-01 01:00:00) </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="datetime-local" id="fromdate" name="fromdate" value="" class="form-control" required=""> 
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">To Date_Time (Format:2021-01-01 01:00:00) </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="datetime-local" id="todate" name="todate" value="" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            
                                                                                        
                                            
                                          <div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Submit
                                        </button></p>
                                        
                                    </div>
                                        </form>
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
<!-- end document-->
