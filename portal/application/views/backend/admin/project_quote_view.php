<?php
$quote      = $this->db->get_where('quote', array('quote_id' => $param2))->result_array();
foreach ($quote as $row):
?>

<div class="row">
    <div class="col-md-12">
        <blockquote class="blockquote-default">
            <p>
                <strong><?php echo $row['title'];?></strong>
            </p>
            <p>
                <small><?php echo $row['description'];?></small>
                <?php if ($row['files'] != ''):?>
                    <br>
                        
                    <i class="entypo-download" style="color: #ccc;"></i>
                        <a style="font-size: 10px; color: #979797;" href="<?php echo base_url();?>uploads/quote_file/<?php echo $row['files'];?>"><?php echo $row['files'];?></a>
                    
                <?php endif;?>
                <hr />

                <i class="entypo-user" style="color: #ccc;"></i>
                    <?php echo $this->db->get_where('client' , array('client_id' => $row['user_id']))->row()->name;?>
                &nbsp;
                &nbsp;
                <i class="entypo-calendar" style="color: #ccc;"></i>
                    <?php echo date("d M Y", $row['timestamp']);?>
                &nbsp;
                &nbsp;
                <i class="entypo-credit-card" style="color: #ccc;"></i>
                    <?php echo $row['amount'];?>
            </p>

        </blockquote>

    </div>
</div>

<?php endforeach;?>