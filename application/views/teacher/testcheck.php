<?php 
		include "top_menu.php"
?>

			<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Bootstrap table</h5>
					</div>
				
				</div>
				<!-- /Title --> 
	<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Table with Checkbox Button</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<table id="table_js_2" data-click-to-select="true" data-select-item-name="myChk" >
											<thead>
												<tr>
													<th></th>
													<th>Code</th>
													<th>Name</th>
													<th>Class</th>
													<th>Address</th>
												</tr>
											</thead>


											<tbody>
											<?php foreach ($rs as $r){ ?>
											      <tr>
											      	<td></td>
											        <td><?php echo $r['code']; ?></td>
											        <td><?php echo $r['name']; ?></td>
											        <td><?php echo $r['std_level']; ?></td>
											        <td><?php echo $r['add3']; ?></td>
											      </tr>
											 <?php   }  ?>
											</tbody>
										</table>
									</div>	
								</div>	
							</div>	
						</div>	
					</div>
				</div>
				<!-- /Row -->


			</div>
		</div>
		<!-- /Main Content -->
<?php 
		include "bottom_menu.php"
?>
