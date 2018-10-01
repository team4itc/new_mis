<?php 
		include "top_menu.php"
?>

			<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">


								<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">กิจกรรมแผนก</h5>
					</div>
				
				</div>
				<!-- /Title --> 

<!-- Row -->
				<div class="row">
					<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">กิจกรรมแผนก</h6>
								</div>
								<div class="pull-right">
									<a href="#" class="pull-left inline-block refresh mr-15">
										<i class="zmdi zmdi-replay"></i>
									</a>
									<a href="#" class="pull-left inline-block full-screen mr-15">
										<i class="zmdi zmdi-fullscreen"></i>
									</a>
									<div class="pull-left inline-block dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
										<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Edit</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Delete</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>New</a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body row pa-0">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
													<tr>
														<th>ระดับชั้น</th>
														<th>จำนวนนักศึกษา</th>
														<th>การเปลี่ยนแปลง</th>
														<th>Budget</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><span class="txt-dark weight-500">ปวช.1</span></td>
														<td>Beavis</td>
														<td><span class="txt-success"><i class="zmdi zmdi-caret-up mr-10 font-20"></i><span>2.43%</span></span></td>
														<td>
															<span class="txt-dark weight-500">$1478</span>
														</td>
														<td>
															<span class="label label-primary">Active</span>
														</td>
													</tr>
													<tr>
														<td><span class="txt-dark weight-500">ปวช.2</span></td>
														<td>Felix</td>
														<td><span class="txt-success"><i class="zmdi zmdi-caret-up mr-10 font-20"></i><span>1.43%</span></span></td>
														<td>
															<span class="txt-dark weight-500">$951</span>
														</td>
														<td>
															<span class="label label-danger">Closed</span>
														</td>
													</tr>
													<tr>
														<td><span class="txt-dark weight-500">ปวช.3</span></td>
														<td>Cannibus</td>
														<td><span class="txt-danger"><i class="zmdi zmdi-caret-down mr-10 font-20"></i><span>-8.43%</span></span></td>
														<td>
															<span class="txt-dark weight-500">$632</span>
														</td>
														<td>
															<span class="label label-default">Hold</span>
														</td>
													</tr>
													<tr>
														<td><span class="txt-dark weight-500">ปวส.1</span></td>
														<td>Neosoft</td>
														<td><span class="txt-success"><i class="zmdi zmdi-caret-up mr-10 font-20"></i><span>7.43%</span></span></td>
														<td>
															<span class="txt-dark weight-500">$325</span>
														</td>
														<td>
															<span class="label label-default">Hold</span>
														</td>
													</tr>
													<tr>
														<td><span class="txt-dark weight-500">ปวส.2</span></td>
														<td>Hencework</td>
														<td><span class="txt-success"><i class="zmdi zmdi-caret-up mr-10 font-20"></i><span>9.43%</span></span></td>
														<td>
															<span class="txt-dark weight-500">$258</span>
														</td>
														<td>
															<span class="label label-primary">Active</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>	
								</div>	
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Advertising & Promotions</h6>
								</div>
								<div class="pull-right">
									<a href="#" class="pull-left inline-block refresh mr-15">
										<i class="zmdi zmdi-replay"></i>
									</a>
									<div class="pull-left inline-block dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
										<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>option 1</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>option 2</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>option 3</a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div>
										<canvas id="chart_2" height="253"></canvas>
									</div>	
									<div class="label-chatrs mt-30">
										<div class="inline-block mr-15">
											<span class="clabels inline-block bg-yellow mr-5"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font">Active</span>
										</div>
										<div class="inline-block mr-15">
											<span class="clabels inline-block bg-red mr-5"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font">Closed</span>
										</div>	
										<div class="inline-block">
											<span class="clabels inline-block bg-green mr-5"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font">Hold</span>
										</div>											
									</div>
								</div>
							</div>	
						</div>	
					</div>	
				</div>	
				<!-- Row -->
			</div>
		</div>
		<!-- /Main Content -->
<?php 
		include "bottom_menu.php"
?>
