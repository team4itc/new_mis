<?php 
		include "top_menu.php"
?>

			<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">


<!-- Row -->
				<div class="row">
					<!-- profile  -->
					<div class="col-lg-4 col-md-12 col-xs-12">
						<div class="panel panel-default card-view  pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body  pa-0">
									<div class="profile-box">
										<div class="profile-cover-pic">
											<div class="fileupload btn btn-default">
												<span class="btn-text">edit</span>
												<input class="upload" type="file">
											</div>
											<div class="profile-image-overlay"></div>
										</div>
										<div class="profile-info text-center">
											<div class="profile-img-wrap">
												<img class="inline-block mb-10" src="dist/img/mock1.jpg" alt="user"/>
												<div class="fileupload btn btn-default">
													<span class="btn-text">edit</span>
													<input class="upload" type="file">
												</div>
											</div>	
											<h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">Madalyn Rascon</h5>
											<h6 class="block capitalize-font pb-20">Developer Geek</h6>
										</div>	
										<div class="social-info">
											<div class="row">
												<div class="col-xs-4 text-center">
													<span class="counts block head-font"><span class="counter-anim">345</span></span>
													<span class="counts-text block">post</span>
												</div>
												<div class="col-xs-4 text-center">
													<span class="counts block head-font"><span class="counter-anim">246</span></span>
													<span class="counts-text block">followers</span>
												</div>
												<div class="col-xs-4 text-center">
													<span class="counts block head-font"><span class="counter-anim">898</span></span>
													<span class="counts-text block">tweets</span>
												</div>
											</div>
											<button class="btn btn-default btn-block btn-outline btn-anim mt-30" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><span class="btn-text">edit profile</span></button>
											<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
															<h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
														</div>
														<div class="modal-body">
															<!-- Row -->
															<div class="row">
																<div class="col-lg-12">
																	<div class="">
																		<div class="panel-wrapper collapse in">
																			<div class="panel-body pa-0">
																				<div class="col-sm-12 col-xs-12">
																					<div class="form-wrap">
																						<form action="#">
																							<div class="form-body overflow-hide">
																								<div class="form-group">
																									<label class="control-label mb-10" for="exampleInputuname_1">Name</label>
																									<div class="input-group">
																										<div class="input-group-addon"><i class="icon-user"></i></div>
																										<input type="text" class="form-control" id="exampleInputuname_1" placeholder="willard bryant">
																									</div>
																								</div>
																								<div class="form-group">
																									<label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
																									<div class="input-group">
																										<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																										<input type="email" class="form-control" id="exampleInputEmail_1" placeholder="xyz@gmail.com">
																									</div>
																								</div>
																								<div class="form-group">
																									<label class="control-label mb-10" for="exampleInputContact_1">Contact number</label>
																									<div class="input-group">
																										<div class="input-group-addon"><i class="icon-phone"></i></div>
																										<input type="email" class="form-control" id="exampleInputContact_1" placeholder="+102 9388333">
																									</div>
																								</div>
																								<div class="form-group">
																									<label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
																									<div class="input-group">
																										<div class="input-group-addon"><i class="icon-lock"></i></div>
																										<input type="password" class="form-control" id="exampleInputpwd_1" placeholder="Enter pwd" value="password">
																									</div>
																								</div>
																								<div class="form-group">
																									<label class="control-label mb-10">Gender</label>
																									<div>
																										<div class="radio">
																											<input type="radio" name="radio1" id="radio_1" value="option1" checked="">
																											<label for="radio_1">
																											M
																											</label>
																										</div>
																										<div class="radio">
																											<input type="radio" name="radio1" id="radio_2" value="option2">
																											<label for="radio_2">
																											F
																											</label>
																										</div>
																									</div>
																								</div>
																								<div class="form-group">
																									<label class="control-label mb-10">Country</label>
																									<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
																										<option value="Category 1">USA</option>
																										<option value="Category 2">Austrailia</option>
																										<option value="Category 3">India</option>
																										<option value="Category 4">UK</option>
																									</select>
																								</div>
																							</div>
																							<div class="form-actions mt-10">			
																								<button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
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
														<div class="modal-footer">
															<button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>
															<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
														</div>
													</div>
													<!-- /.modal-content -->
												</div>
												<!-- /.modal-dialog -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- profile  -->
					<div class="col-lg-3 col-md-6 col-xs-12">
						<div class="panel panel-default card-view pt-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-white">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-left pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter">$<span class="counter-anim">15,678</span></span>
													<span class="block"><span class="weight-500 uppercase-font txt-grey font-13">growth</span><i class="zmdi zmdi-caret-down txt-danger font-21 ml-5 vertical-align-middle"></i></span>
												</div>
												<div class="col-xs-6 text-left  pl-0 pr-0 pt-25 data-wrap-right">
													<div id="sparkline_4" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default card-view pt-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-white">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-left pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim">46.41</span>%</span>
													<span class="block"><span class="weight-500 uppercase-font txt-grey font-13">population</span><i class="zmdi zmdi-caret-up txt-success font-21 ml-5 vertical-align-middle"></i></span>
												</div>
												<div class="col-xs-6 text-left  pl-0 pr-0 pt-25 data-wrap-right">
													<div id="sparkline_5" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-warning card-view">
							<div class="panel-heading small-panel-heading relative">
								<div class="pull-left">
									<h6 class="panel-title txt-light">Invoices</h6>
								</div>
								<div class="clearfix"></div>
								<div class="head-overlay"></div>
							</div>		
							<div class="panel-wrapper collapse in">
								<div class="panel-body row pa-0">
									<div class="sm-data-box data-with-border bg-yellow">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="weight-500 uppercase-font txt-light block">due</span>
													<span class="txt-light block counter">$<span class="counter-anim">15678</span></span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<span class="weight-500 uppercase-font txt-light  block">overdue</span>
													<span class="txt-light block counter">$<span class="counter-anim">45678</span></span>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-success card-view">
							<div class="panel-heading small-panel-heading relative">
								<div class="pull-left">
									<h6 class="panel-title txt-light">Monthly Revenue</h6>
								</div>
								<div class="clearfix"></div>
								<div class="head-overlay"></div>
							</div>		
							<div class="panel-wrapper collapse in">
								<div class="panel-body row pa-0">
									<div class="sm-data-box bg-green">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="block"><i class="zmdi zmdi-trending-up txt-warning font-18 mr-5"></i><span class="weight-500 uppercase-font txt-light">growth</span></span>
													<span class="txt-light block counter">$<span class="counter-anim">15,678</span></span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<div id="sparkline_6" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-6 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">top 5 products</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body row">
									<div class="col-sm-6 pa-0">
										<canvas id="chart_7" height="164"></canvas>
									</div>
									<div class="col-sm-6 pr-0 pt-25">
										<div class="label-chatrs">
											<div class="mb-5">
												<span class="clabels inline-block bg-yellow mr-5"></span>
												<span class="clabels-text font-12 inline-block txt-dark capitalize-font">Paleo Bars</span>
											</div>
											<div class="mb-5">
												<span class="clabels inline-block bg-pink mr-5"></span>
												<span class="clabels-text font-12 inline-block txt-dark capitalize-font">Bow Ties</span>
											</div>
											<div class="mb-5">
												<span class="clabels inline-block bg-blue mr-5"></span>
												<span class="clabels-text font-12 inline-block txt-dark capitalize-font">Pocket Squares</span>
											</div>
											<div class="mb-5">
												<span class="clabels inline-block bg-red mr-5"></span>
												<span class="clabels-text font-12 inline-block txt-dark capitalize-font">Wood Sunglasses</span>
											</div>	
											<div class="">
												<span class="clabels inline-block bg-green mr-5"></span>
												<span class="clabels-text font-12 inline-block txt-dark capitalize-font">Leggings</span>
											</div>												
										</div>
									</div>										
								</div>	
							</div>
						</div>
						<div class="panel panel-default card-view sm-data-box-3">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">conversion rate</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="col-sm-6 pa-0">
										<span id="pie_chart_4" class="easypiechart" data-percent="33">
											<span class="percent block txt-dark weight-500"></span>
											<span class="block txt-success text-center">
												<i class="zmdi zmdi-caret-up pr-5 font-20"></i><span class="weight-500">+33%</span>
											</span>
										</span>
									</div>	
									<div class="col-sm-6 pr-0">
										<ul class="flex-stat mb-15">
											<li class="text-left block no-float full-width mb-15">
												<span class="block">Cart Abandonment</span>
												<span class="block txt-dark weight-500  font-18"><span class="counter-anim">73</span>%</span>
												<span class="block txt-success pull-left mt-5">
													<i class="zmdi zmdi-caret-up pr-5 font-20 pull-left"></i><span class="weight-500 pull-left">+15%</span>
												</span>
												<div class="clearfix"></div>
											</li>
											<li class="text-left block no-float full-width">
												<span class="block">Revenue Left</span>
												<span class="block txt-dark weight-500  font-18">$<span class="counter-anim">12,432</span></span>
												<span class="block txt-success pull-left mt-5">
													<i class="zmdi zmdi-caret-up pr-5 font-20 pull-left"></i><span class="weight-500 pull-left">+4%</span>
												</span>
												<div class="clearfix"></div>
											</li>
										</ul>
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
