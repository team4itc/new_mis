<?php foreach ($rs as $r){ ?>   
                          <tr>
                            <td class="txt-dark"><?php echo $r['code']; ?></td>
                            <td class="txt-dark"><?php echo $r['name']; ?></td>
                            <td class="txt-dark"><?php echo $tdp=$this->session->userdata('t_dep'); ?></td>
                            <td><?php echo $r['std_level']; ?></td>
                            <td><span class="label label-warning font-weight-100">Failed</span></td>
                       		<td><center><input type="radio" class="checkthis" name="Checked[]" /></center></td>
                          </tr>
<?php } ?>