<?php 
    include "top_menu.php"
?>

      <!-- Main Content -->
    <div class="page-wrapper">
      <div class="container-fluid">

  <!-- Row -->

        <!-- Title -->
        <div class="row heading-bg">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">กิจกรรมแผนก</h5>
          </div>
         
        </div>
        <!-- /Title -->
        
        <!-- Row -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default card-view">
              <div class="panel-wrapper collapse in">
                <div class="panel-body row">
                  <div class="table-wrap">
                    <div class="table-responsive">
                      <table class="table display responsive product-overview mb-30" id="myTable">
                        <thead>
                          <tr>
                            <th>แผนก</th>
                            <th>ระดับชั้น</th>
                            <th>กลุ่ม</th>
                            <th>จำนวนนักศึกษา</th>
                            <th>วันที่</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>

                              <?php foreach ($rs as $r){ ?>
                          <tr>
                            <td class="txt-dark"><?php echo $tdp=$this->session->userdata('t_dep'); ?></td>
                            <td class="txt-dark"><?php echo $r['std_level']; ?></td>
                            <td><?php echo $r['gro']; ?></td>
                            <td></td>
                            <td><?php date_default_timezone_set("UTC"); echo date("d/m/y"); ?></td>
                            <td>
                              <span class="label label-warning font-weight-100">Failed</span>
                            </td>
                            <td><a href="<?php echo base_url();?>teacher/checked/<?php echo $r['gro'];?>">
                              <button class="btn btn-primary btn-anim"><i class="icon-check"></i><span class="btn-text">Check</span></button></a></td>

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
        </div>
        <!-- /Row -->


      </div>
    </div>
    <!-- /Main Content -->

<?php 
    include "bottom_menu.php"
?>
