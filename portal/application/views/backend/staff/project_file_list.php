
<div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <?php echo get_phrase('project_files');?>
                </div>
                
            </div>
            
            <div class="panel-body" style="padding: 0px;">
                <!-- PROJECT FILES -->
                <table class="table table-striped">
                    <tbody>
                        <?php
                        $project_id = $this->db->get_where('project' , array('project_code' => $project_code))->row()->project_id;
                        $this->db->order_by('project_file_id', 'desc');
                        $files = $this->db->get_where('project_file', array('project_id' => $project_id))->result_array();
                        foreach ($files as $row2):
                            ?>
                            <tr>
                                <td width="1"><i class="entypo-dot"></i></td>
                                <td align="left">
                                    <?php   if (strlen($row2['name']) >= 60)
                                                echo substr($row2['name'] , 0 , 55) . '....';
                                            if (strlen($row2['name']) < 60)
                                                echo $row2['name'];

                                ?> 
                                </td>
                                <td align="right">
                                    <?php if ($row2['description'] != ''):?>
                                        <a class="tooltip-default" style="color:#aaa;" data-toggle="tooltip" 
                                           data-placement="top" data-original-title="<?php echo $row2['description'];?>"
                                           href="#">
                                            <i class="entypo-info"></i>
                                        </a>
                                    <?php endif;?>
                                    <a class="tooltip-default" style="color:#aaa;" data-toggle="tooltip" 
                                       data-placement="top" data-original-title="<?php echo get_phrase('download'); ?>"
                                       href="<?php echo base_url(); ?>index.php?staff/project_file/download/<?php echo $row2['project_file_id']; ?>">
                                        <i class="entypo-download"></i>
                                    </a>
                                    
                                    <a class="tooltip-default" style="color:#aaa;cursor:pointer;" data-toggle="tooltip" 
                                       data-placement="top" data-original-title="<?php echo get_phrase('save_to_dropbox'); ?>"
                                       onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/project_file_addto_dropbox/<?php echo $row2['project_file_id']; ?>')">
                                       
                                        <i class="entypo-dropbox"></i>
                                    </a>
                                    <!-- DROPBOX SAVER BUTTON -->
                                    <!--<div id="container_saver_<?php echo $row2['project_file_id'];?>"></div>-->

                                    <a class="tooltip-default" style="color:#aaa;cursor:pointer;" data-toggle="tooltip"
                                       data-placement="top" data-original-title="<?php echo get_phrase('delete'); ?>"
                                       onclick="confirm_modal('<?php echo base_url(); ?>index.php?staff/project_file/delete/<?php echo $row2['project_file_id']; ?>', '<?php echo base_url(); ?>index.php?staff/reload_projectroom_file_list/<?php echo $project_code; ?>');">
                                        <i class="entypo-trash"></i>
                                    </a>

                                    <!--DROPBOX SAVER DYNAMIC SCRIPT -->
                                    <script type="text/javascript">
    
                                        var options_saver_<?php echo $row2['project_file_id'];?> = {
                                            files: [
                                                {'url': 'https://dl.dropboxusercontent.com/s/deroi5nwm6u7gdf/advice.png', 'filename': 'koala.png'}
                                            ],
                                            success: function () {
                                                toastr.success("Files saved to your Dropbox.", "Success");
                                            },
                                            progress: function (progress) {},
                                            cancel: function () {},
                                            error: function (errorMessage) {}
                                        };
                                        
                                        //var button_saver_<?php echo $row2['project_file_id'];?> = Dropbox.createSaveButton(options_saver_<?php echo $row2['project_file_id'];?>);
                                        //document.getElementById("container_saver_<?php echo $row2['project_file_id'];?>").appendChild(button_saver_<?php echo $row2['project_file_id'];?>);

                                    </script>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <!-- PROJECT FILES -->
                
            </div>
        </div>