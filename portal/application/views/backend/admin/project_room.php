<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb bc-3">
			<li>
				<a href="<?php echo base_url();?>index.php?admin/dashboard">
					<i class="entypo-folder"></i>
					<?php echo get_phrase('dashboard');?>
				</a>
			</li>
			<li><a href="<?php echo base_url();?>index.php?admin/project"><?php echo get_phrase('project_list');?></a></li>
		</ol>
	</div>
</div>
<div class="row">

	<div class="col-md-2">

		<a style="text-align: left;" href="<?php echo base_url();?>index.php?admin/projectroom/overview/<?php echo $project_code;?>" 
			class="<?php if ($room_page == 'project_overview') 
								echo 'btn btn-primary';
							else 
								echo 'btn btn-default';?> btn-block btn-icon icon-left">
			<?php echo get_phrase('overview');?>
			<i class="entypo-info"></i>
		</a>
		
<!-- //EBJ Commenting out wall section --unnessisary feature -->
<!--
		
		<a style="text-align: left;" href="<?php echo base_url();?>index.php?admin/projectroom/wall/<?php echo $project_code;?>" 
			class="<?php if ($room_page == 'project_wall') 
								echo 'btn btn-primary';
							else 
								echo 'btn btn-default';?> btn-block btn-icon icon-left">
			<?php echo get_phrase('wall');?>
			<i class="entypo-chat"></i>
		</a>
-->

		<a style="text-align: left;" href="<?php echo base_url();?>index.php?admin/projectroom/file/<?php echo $project_code;?>" 
			class="<?php if ($room_page == 'project_file') 
								echo 'btn btn-primary';
							else 
								echo 'btn btn-default';?> btn-block btn-icon icon-left">
			<?php echo get_phrase('files');?>
			<i class="entypo-attach"></i>
		</a>
		
		<!-- //EBJ commenting out.  not using tasks feature -->
		<!--
		<a style="text-align: left;" href="<?php echo base_url();?>index.php?admin/projectroom/task/<?php echo $project_code;?>" 
			class="<?php if ($room_page == 'project_task') 
								echo 'btn btn-primary';
							else 
								echo 'btn btn-default';?> btn-block btn-icon icon-left">
			<?php echo get_phrase('tasks');?>
			<i class="entypo-flow-tree"></i>
		</a>
		-->

		<!-- //EBJ commenting out.  not using timesheet feature -->
		<!--
		<a style="text-align: left;" href="<?php echo base_url();?>index.php?admin/projectroom/timesheet/<?php echo $project_code;?>" 
			class="<?php if ($room_page == 'project_timesheet') 
								echo 'btn btn-primary';
							else 
								echo 'btn btn-default';?> btn-block btn-icon icon-left">
			<?php echo get_phrase('timesheet');?>
			<i class="entypo-clock"></i>
		</a>
		-->

		<a style="text-align: left;" href="<?php echo base_url();?>index.php?admin/projectroom/payment/<?php echo $project_code;?>" 
			class="<?php if ($room_page == 'project_payment') 
								echo 'btn btn-primary';
							else 
								echo 'btn btn-default';?> btn-block btn-icon icon-left">
			<?php echo /* //EBJ changing from payment to invoices */get_phrase('invoices');?>
			<i class="entypo-credit-card"></i>
		</a>

		<a style="text-align: left;" href="<?php echo base_url();?>index.php?admin/projectroom/note/<?php echo $project_code;?>" 
			class="<?php if ($room_page == 'project_note') 
								echo 'btn btn-primary';
							else 
								echo 'btn btn-default';?> btn-block btn-icon icon-left">
									<!-- //EBJ changed note to notes -->
			<?php echo get_phrase('notes');?>
			<i class="entypo-doc-text-inv"></i>
		</a>


        <a style="text-align: left;" href="<?php echo base_url();?>index.php?admin/projectroom/edit/<?php echo $project_code;?>" 
			class="<?php if ($room_page == 'project_edit') 
								echo 'btn btn-primary';
							else 
								echo 'btn btn-info';?> btn-block btn-icon icon-left">
			<?php echo /* //EBJ changed from edit this project to edit details */get_phrase('edit_details');?>
			<i class="entypo-pencil"></i>
		</a>

	</div>

	<div class="main_data">
		
		<?php include $room_page . '.php';?>

	</div>

</div>