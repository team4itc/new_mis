<?php 
		include "top_menu.php"
?>

			<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">



 <!-- Title -->
        <div class="row heading-bg">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">******</h5>
          </div>

        </div>
        <!-- /Title -->
        <?php // echo form_open('teacher/ChedkUp');?>
        <!-- Row -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default card-view">
              <div class="panel-wrapper collapse in">
                <div class="panel-body row">
                  <div class="table-wrap">
                    <div class="table-responsive"><form method="post" action="">
                      <table class="table display responsive product-overview mb-30" id="myTable">
                        <thead>
                          <tr>
                            <th>code</th>
                            <th>ชื่อ-นามสกุล</th>
                            <th>แผนก</th>
                            <th>ระดับชั้น</th>
                            <th>Status</th>
                            <th>มา</th>
                            <th>ขาด</th>

                          </tr>
                        </thead>
                        <tbody>                           
                         <?php foreach ($rs as $r){ ?>   
                          <tr>
                            <td class="txt-dark"><?php echo $r['code']; ?></td>
                            <td class="txt-dark"><?php echo $r['name']; ?></td>
                            <td class="txt-dark"><?php echo $tdp=$this->session->userdata('t_dep'); ?></td>
                            <td><?php echo $r['std_level']; ?></td>
                            <td><span class="label label-warning font-weight-100">Failed</span></td>
                       		<td><center><input type="radio" class="checkthis" name="Checked<?php echo $r['code']; ?>[]" value="1"/></center></td>
                          <td><center><input type="radio" class="checkthis" name="Checked<?php echo $r['code']; ?>[]" value="0"/></center></td>
                          </tr>

                           <?php   }  ?>
                           <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><center><input class="btn btn-success btn-anim" type="submit" name="SaveCheck"><i class="icon-heart"></i><span class="btn-text">add </span></center> </td>
                             </tr>
                        </tbody>
                      </table></form>
                    </div>
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
