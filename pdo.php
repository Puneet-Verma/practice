<?php




try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_database", $db_user, $db_pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";


   $STH = $DBH->query('SELECT * FROM tbl_screen');

    # setting the fetch mode
    $STH->setFetchMode(PDO::FETCH_ASSOC);

    while($row = $STH->fetch()) {
        echo $row['screenName'] . "\n";

    }




    }

catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }







?>










xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx




<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Smarter Homes</title>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
					<style>
body {
  background: rgba(27,56,84,.32);

}

table{
color: #ffffff;
 /*background-color:#b5bfc8;
*/
}

.table td, .table th{

padding: 5px !important;
border: none !important;
}

th{

 /* background-color: #1B3854;
  border: 10px solid #ddd;
  padding: 0px;
  */

}


.head{background-color: #1B3854 !important;;
    height: 8vh !important;
/*padding: 0px;*/
  /* border-radius: 10px; */
}

.side-head{background-color: #1B3854 !important;;

}



.data{
 border-radius: 15px;
 color: #000000;

}

.card{
display: grid;
   border-radius: 15px;
  height: 15vh;
  text-align: center;
align-content: center;
font-size:200%;
background-color: #e6e7e8;
}


.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
}
/*  to remove black shade in slider*/
.carousel-control.left, .carousel-control.right {
   background-image:none !important;
   filter:none !important;
   /* opacity:1 !important;color:red; arrow color */
}




</style>
				</head>
				<body style="text-align:center; margin-top:3vh;">
					<div class="container">
						<h1>Dashboard</h1>

            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="30">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <!-- Screen 1-->
                <div class="item active">




						<h3>Actions</h3>
						<table class="table">
							<thead>
								<tr>
									<th></th>
									<th>
										<div class="card head">
											<div class="card-body">Today</div>
										</div>
									</th>
									<th>
										<div class="card head">
											<div class="card-body">This Week</div>
										</div>
									</th>
									<th>
										<div class="card head">
											<div class="card-body">This Month</div>
										</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>
										<div class="card side-head">
											<div class="card-body">Water Measured</div>
										</div>
									</th>
									<td>
										<div class="card">
											<div class="card-body data">Basic card</div>
										</div>
									</td>
									<td>
										<div class="card">
											<div class="card-body">Basic card</div>
										</div>
									</td>
									<td>
										<div class="card">
											<div class="card-body">Basic card</div>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<div class="card side-head">
											<div class="card-body">Valve Actions</div>
										</div>
									</th>
									<td>
										<div class="card">
											<div class="card-body">Basic card</div>
										</div>
									</td>
									<td>
										<div class="card">
											<div class="card-body">Basic card</div>
										</div>
									</td>
									<td>
										<div class="card">
											<div class="card-body">Basic card</div>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<div class="card side-head">
											<div class="card-body">Leak Alerts</div>
										</div>
									</th>
									<td>
										<div class="card">
											<div class="card-body">Basic card</div>
										</div>
									</td>
									<td>
										<div class="card">
											<div class="card-body">Basic card</div>
										</div>
									</td>
									<td>
										<div class="card">
											<div class="card-body">Basic card</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

        </div>
        <!-- Screen 2-->
        <div class="item">

          scs
        </div>



					<div style="font-size:24px";>
Color will change to
						<font color="#ee8156">Orange</font> if there is any change in data from last hour.
</div>

					</body>
				</div>
			</html>



xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
