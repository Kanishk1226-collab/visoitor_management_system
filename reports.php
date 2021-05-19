<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- SweetAlert2 -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="assets/plugins/dropzone/min/dropzone.min.css">
  <!-- DateTimePicker -->
  <link rel="stylesheet" href="assets/dist/css/jquery.datetimepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Switch Toggle -->
  <link rel="stylesheet" href="assets/plugins/bootstrap4-toggle/css/bootstrap4-toggle.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/dist/css/styles.css">
	<script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

</head>
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


 ?>
 <div class="col-md-12">
        <div class="card card-outline card-success">
          <!--
          <div class="card-header">
            <b>Project Progress</b>
            <div class="card-tools">
            	<button class="btn btn-flat btn-sm bg-gradient-success btn-success" id="print"><i class="fa fa-print"></i> Print</button>
            </div>
          </div>
        -->
        <!--
        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Submit
        </button>

-->

<!--



          	<a href="print.php" target="_blank" class="btn btn-success pull-right"> <i class="fa fa-print"></i> Print</a>

          -->

            <div class="card-header">
              <b>VISITORS LIST</b>
              <div class="card-tools">
                <a href="print.php" target="_blank" class="btn btn-success pull-right"><i class="fa fa-print"></i> Print</a>
              </div>
            </div>

            <div class="card-header">
              <b>PERSON WHOM GET MAXIMUM NUMBER OF VISITS BY VISITORS</b>
              <div class="card-tools">
                <a href="print1.php" target="_blank" class="btn btn-success pull-right"><i class="fa fa-print"></i> Print</a>
              </div>
            </div>

            <div class="card-header">
              <b>MAXIMUM REASONS RECORDED TO VISIT</b>
              <div class="card-tools">
                <a href="print2.php" target="_blank" class="btn btn-success pull-right"><i class="fa fa-print"></i> Print</a>
              </div>
            </div>



            <div class="card-header">
              <b>SEARCH VISITORS IN BETWEEN DATE AND TIME</b>

            <div class="card">
                <div class="card-body card-block">
                    <form method="post" enctype="multipart/form-data" class="form-horizontal" name="bwdatereport" action="print3.php">
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
                        <div class="card-tools" style = "position:relative; left:950px; top:2px;">
                          <button target="_blank" type="submit" name="submit" class="btn btn-success pull-right" id="print"><i class="fa fa-print"></i> Print</button>
                        </div>
                      </div>
                    </form>
                </div>
              </div>






        </div>
        </div>
<script>
	$('#print').click(function(){
		start_load()
		var _h = $('head').clone()
		var _p = $('#printable').clone()
		var _d = "<p class='text-center'><b>Project Progress Report as of (<?php echo date("F d, Y") ?>)</b></p>"
		_p.prepend(_d)
		_p.prepend(_h)
		var nw = window.open("","","width=900,height=600")
		nw.document.write(_p.html())
		nw.document.close()
		nw.print()
		setTimeout(function(){
			nw.close()
			end_load()
		},750)
	})
</script>
