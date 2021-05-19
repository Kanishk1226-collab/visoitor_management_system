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



	<br /> <br />
	<b style="color:blue;">Date Prepared:</b>
	<?php
		$date = date("Y-m-d", strtotime("+6 HOURS"));
		echo $date;
	?>
	<br /><br />
	<table class="table table-striped">
    <thead style="text-align:center">
    <tr>
    <tr>

    <th>REASON</th>
    <th>OCCURENCE</th>

    </tr>
    </tr>
    </thead>
		<tbody>
			<?php
				require 'dbconnection.php';

				$query = $conn->query("SELECT ReasontoMeet, COUNT(*) AS `num` FROM visitor GROUP BY ReasontoMeet");
				while($fetch = $query->fetch_array()){

			?>

			<tr>
				<td style="text-align:center;"><?php echo $fetch['ReasontoMeet']?></td>
				<td style="text-align:center;"><?php echo $fetch['num']?></td>

			</tr>

			<?php
				}
			?>
		</tbody>
	</table>

</body>
</html>
<?php
$con  = mysqli_connect("localhost","root","","visitors");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT ReasontoMeet, COUNT(*) AS `num` FROM visitor GROUP BY ReasontoMeet";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {

            $productname[]  = $row['ReasontoMeet']  ;
            $sales[] = $row['num'];
        }


 }


?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title>
    </head>


<body>



    <div style="width:60%;height:20%;text-align:center">
            <h2 class="page-header">ANALYTICS REPORT </h2>
            <div>MAXIMUM REASONS RECORDED TO VISITS</div>
            <canvas  id="chartjs_bar"></canvas>
        </div>
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($productname); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',

                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },


                }
                });
    </script>
</html>

<script type="text/javascript">
	function PrintPage() {
		window.print();
	}

</script>
<center><button id="PrintButton" onclick="PrintPage()">Print</button></center>
