<?php
include ('logininclude.php');
include ('../resources/connection.php');
include ('../resources/functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Money Makers - Home</title>
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<link href="../vendor/morrisjs/morris.css" rel="stylesheet">
<link href="../vendor/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-static-top" role="navigation"
			style="margin-bottom: 0">
			<div>
				<a href="index.php"><img class="navbar-left"
					style="max-width: 225px; padding: 6px"
					src="../resources/mm_logo.png"</img> </a>
			</div>
			<div class="col-md-3">
				<form action="search.php" role="form" method="POST">
					<div class="form-group-lg input-group"
						style="margin-top: 16px; max-width: 400px">
						<input type="text" class="form-control" name="SearchString"
							id="SearchString" placeholder="Search stocks"> <span
							class="input-group-btn">
							<button class="btn btn-info btn-lg" type="submit">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
			</div>
			<div class="col-lg-6"></div>
            <?php
            session_start();
            if ($_SESSION['is_logged_in']) {
                include ('../resources/loggedinnav.php');
                // echo "test";
            } else {
                echo "
						<div class='nav navbar-top-links navbar-right btn-lg' style='margin-top:12px'>
							<a href='login.php'><i class='fa fa-sign-in fa-fw'></i> Login</a>
						</div>
				";
            }
            
            ?>
        </nav>
		<div id="page-wrapper">
			<div class="row-eq-height">
				<div class="col-lg-12">
					<h1 class="page-header"></h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row-eq-height">
				<div class="col-lg-3">
					<div class="chat-panel panel panel-green chat">
						<div class="panel-heading" style="font-size: 18px">
							My Subs
							<div class="fa fa-star pull-left"
								style="margin-right: 12px; margin-top: 3px"></div>
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body" style="height: 695px">
							<div class="list-group-sm">
							<?php
ShowSubbedStocks();
    ?>
							</div>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<div class="col-lg-3">
				<!-- /.panel -->
				<div class="panel panel-yellow">
					<div class="panel-heading" style="font-size: 18px">
						News
						<div class="fa fa-rss pull-left"
							style="margin-right: 12px; margin-top: 3px"></div>
					</div>
					<div class="chat-panel panel panel-default">
						<div class="panel-body" style="height: 695px">
							<ul class="chat">
								<li class="left clearfix"><span class="chat-img pull-left"> <img
										src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
										class="img-circle">
								</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Story 1</strong> <small
												class="pull-right text-muted"> <i
												class="fa fa-clock-o fa-fw"></i> Date/Time
											</small>
										</div>
										<p>Story headline</p>
									</div></li>
								<li class="left clearfix"><span class="chat-img pull-left"> <img
										src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
										class="img-circle">
								</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Story 2</strong> <small
												class="pull-right text-muted"> <i
												class="fa fa-clock-o fa-fw"></i> Date/Time
											</small>
										</div>
										<p>Story headline</p>
									</div></li>
								<li class="left clearfix"><span class="chat-img pull-left"> <img
										src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
										class="img-circle">
								</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Story 3</strong> <small
												class="pull-right text-muted"> <i
												class="fa fa-clock-o fa-fw"></i> Date/Time
											</small>
										</div>
										<p>Story headline</p>
									</div></li>
								<li class="left clearfix"><span class="chat-img pull-left"> <img
										src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
										class="img-circle">
								</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Story 4</strong> <small
												class="pull-right text-muted"> <i
												class="fa fa-clock-o fa-fw"></i> Date/Time
											</small>
										</div>
										<p>Story headline</p>
									</div></li>
								<li class="left clearfix"><span class="chat-img pull-left"> <img
										src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
										class="img-circle">
								</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Story 5</strong> <small
												class="pull-right text-muted"> <i
												class="fa fa-clock-o fa-fw"></i> Date/Time
											</small>
										</div>
										<p>Story headline</p>
									</div></li>
								<li class="left clearfix"><span class="chat-img pull-left"> <img
										src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
										class="img-circle">
								</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Story 6</strong> <small
												class="pull-right text-muted"> <i
												class="fa fa-clock-o fa-fw"></i> Date/Time
											</small>
										</div>
										<p>Story headline</p>
									</div></li>
								<li class="left clearfix"><span class="chat-img pull-left"> <img
										src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
										class="img-circle">
								</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Story 7</strong> <small
												class="pull-right text-muted"> <i
												class="fa fa-clock-o fa-fw"></i> Date/Time
											</small>
										</div>
										<p>Story headline</p>
									</div></li>
								<li class="left clearfix"><span class="chat-img pull-left"> <img
										src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
										class="img-circle">
								</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Story 8</strong> <small
												class="pull-right text-muted"> <i
												class="fa fa-clock-o fa-fw"></i> Date/Time
											</small>
										</div>
										<p>Story headline</p>
									</div></li>
								<li class="left clearfix"><span class="chat-img pull-left"> <img
										src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
										class="img-circle">
								</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Story 9</strong> <small
												class="pull-right text-muted"> <i
												class="fa fa-clock-o fa-fw"></i> Date/Time
											</small>
										</div>
										<p>Story headline</p>
									</div></li>
								<li class="left clearfix"><span class="chat-img pull-left"> <img
										src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
										class="img-circle">
								</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Story 10</strong> <small
												class="pull-right text-muted"> <i
												class="fa fa-clock-o fa-fw"></i> Date/Time
											</small>
										</div>
										<p>Story headline</p>
									</div></li>
							</ul>
						</div>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-4"></div>
							<!-- /.col-lg-4 (nested) -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<div class="col-lg-3">
				<div class="panel panel-primary">
					<div class="panel-heading" style="font-size: 18px">
						Most Active
						<div class="fa fa-globe pull-left"
							style="margin-right: 12px; margin-top: 3px"></div>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Stock</th>
												<th>Price</th>
												<th>Change</th>
												<th>Change (%)</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>stock</td>
												<td>price</td>
												<td>change</td>
												<td>change %</td>
											</tr>
											<tr>
												<td>stock</td>
												<td>price</td>
												<td>change</td>
												<td>change %</td>
											</tr>
											<tr>
												<td>stock</td>
												<td>price</td>
												<td>change</td>
												<td>change %</td>
											</tr>
											<tr>
												<td>stock</td>
												<td>price</td>
												<td>change</td>
												<td>change %</td>
											</tr>
											<tr>
												<td>stock</td>
												<td>price</td>
												<td>change</td>
												<td>change %</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- /.table-responsive -->
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading" style="font-size: 18px">
						Cryptocurrencies
						<div class="fa fa-key pull-left"
							style="margin-right: 12px; margin-top: 3px"></div>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Stock</th>
												<th>Price</th>
												<th>Change</th>
												<th>Change (%)</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>stock</td>
												<td>price</td>
												<td>change</td>
												<td>change %</td>
											</tr>
											<tr>
												<td>stock</td>
												<td>price</td>
												<td>change</td>
												<td>change %</td>
											</tr>
											<tr>
												<td>stock</td>
												<td>price</td>
												<td>change</td>
												<td>change %</td>
											</tr>
											<tr>
												<td>stock</td>
												<td>price</td>
												<td>change</td>
												<td>change %</td>
											</tr>
											<tr>
												<td>stock</td>
												<td>price</td>
												<td>change</td>
												<td>change %</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- /.table-responsive -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<!-- /.panel -->
				<div class="panel panel-primary">
					<div class="panel-heading" style="font-size: 18px">
						Most Gains
						<div class="fa fa-arrow-up pull-left"
							style="margin-right: 12px; margin-top: 3px"></div>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="table-responsive">
                                        <?php
                                        
                                        ShowMostGains();
                                        ?>
                                    </div>
								<!-- /.table-responsive -->
							</div>
							<!-- /.col-lg-4 (nested) -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.panel-body -->
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading" style="font-size: 18px">
						Most Losses
						<div class="fa fa-arrow-down pull-left"
							style="margin-right: 12px; margin-top: 3px"></div>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="table-responsive">
                                        <?php
                                        // Cannot include function.php, breaks for some reason?
                                        ShowMostLosses();
                                        ?>
                                    </div>
								<!-- /.table-responsive -->
							</div>
							<!-- /.col-lg-4 (nested) -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-4 -->
		</div>
		<!-- /.row -->
	</div>
	</div>
	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/metisMenu/metisMenu.min.js"></script>
	<script src="../vendor/raphael/raphael.min.js"></script>
	<script src="../vendor/morrisjs/morris.min.js"></script>
	<script src="../data/morris-data.js"></script>
	<script src="../dist/js/sb-admin-2.js"></script>
</body>

</html>