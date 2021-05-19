<!DOCTYPE html>
<?php
	require 'dbconnection.php';
?>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="au theme template">
		<meta name="author" content="Hau Nguyen">
		<meta name="keywords" content="au theme template">


		<title>CVMS Visitors</title>


		<link href="css/font-face.css" rel="stylesheet" media="all">
		<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
		<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
		<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">


		<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">


		<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
		<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
		<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
		<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
		<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">


		<link href="css/theme.css" rel="stylesheet" media="all">



		<style>
		.table {
			width: 100%;
			margin-bottom: 20px;
		}

		.table-striped tbody > tr:nth-child(odd) > td,
		.table-striped tbody > tr:nth-child(odd) > th {
			background-color: #f9f9f9;
		}

		@media print{
			#print {
				display:none;
			}
		}
		@media print {
			#PrintButton {
				display: none;
			}
		}

		@page {
			size: auto;   /* auto is the initial value */
			margin: 0;  /* this affects the margin in the printer settings */
		}
	</style>
	</head>
<body>
	<h2 style="text-align:center">VISITOR MANAGEMENT SYSTEM</h2>
	<br /> <br /> <br /> <br />
	<b style="color:blue;">Date Prepared:</b>
	<?php
		$date = date("Y-m-d", strtotime("+6 HOURS"));
		echo $date;
	?>
	<br /><br />
	<table class="table table-striped">
	<thead style="text-align:center">
<tr>
<th>Full Name</th>
<th>Contact Number</th>
<th>Email</th>
<th>Reason to Visit</th>
</tr>
  </thead>
		<tbody>
			<?php
				require 'dbconnection.php';
				$query = $conn->query("SELECT * FROM `visitor`");
				while($fetch = $query->fetch_array()){
				?>

			<tr>
				<td style="text-align:center;"><?php echo $fetch['FullName']?></td>
				<td style="text-align:center;"><?php echo $fetch['MobileNumber']?></td>
				<td style="text-align:center;"><?php echo $fetch['Email']?></td>
				<td style="text-align:center;"><?php echo $fetch['ReasontoMeet']?></td>
			</tr>

			<?php
				}
			?>
		</tbody>
	</table>
	<center><button id="PrintButton" onclick="PrintPage()">Print</button></center>
</body>
<script type="text/javascript">
function PrintPage() {
window.print();
}
  window.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ window.close() },750)
	});
</script>
</html>
