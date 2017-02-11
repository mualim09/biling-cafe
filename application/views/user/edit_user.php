<div class="row">
	<div class="col-md-8 col-md-offset-2"><?php echo $this->session->flashdata('alert'); ?></div>
	<div class="col-md-12">
		<div class="col-md-8 col-md-offset-2">
			<div class="form-group">
				<h4>Update User</h4><hr>
			</div>
	<?php echo form_open(current_url(), array('class' => 'form-horiontal')); ?>
		  	<div class="form-group col-md-12">
		    	<label for="full_name" class="col-sm-2 control-label">Full Name</label>
		    	<div class="col-sm-10">
		    		<input type="hidden" class="form-control" name="user_ID" value="<?php echo $get->user_ID; ?>">
		      		<input type="text" class="form-control" name="full_name" value="<?php echo $get->fullname; ?>">
		      		<?php echo form_error('full_name', '<small class="text-red">', '</small>'); ?>
		    	</div>
		  	</div>
		  	<div class="form-group col-md-12">
		    	<label for="email" class="col-sm-2 control-label">E-mail</label>
		    	<div class="col-sm-6">
		      		<input type="email" class="form-control" name="email" value="<?php echo $get->email; ?>">
		      		<?php echo form_error('email', '<small class="text-red">', '</small>'); ?>
		    	</div>
		  	</div>
		  	<div class="form-group col-md-12">
		    	<label for="phone" class="col-sm-2 control-label">Phone</label>
		    	<div class="col-sm-4">
		      		<input type="text" class="form-control" name="phone" value="<?php echo $get->phone; ?>">
		      		<?php echo form_error('phone', '<small class="text-red">', '</small>'); ?>
		    	</div>
		  	</div>
		  	<div class="form-group col-md-12">
		    	<label for="access" class="col-sm-2 control-label">User Privileges</label>
		    	<div class="col-sm-10">
	<?php 
	/**
	 * Role acces data (result_array)
	 *
	 **/
	echo form_dropdown('role', array_column($role_access, 'role_name', 'role_id'), $get->role_id, array('class' => 'form-control'));
	?>
		    	</div>
		  	</div>
			  <div class="col-md-12">
				<div class="clearfix form-actions">
					<div class="col-md-offset-4 col-md-9">
						<button class="btn btn-info" type="submit">
							<i class="ace-icon fa fa-check bigger-110"></i>Update
						</button>
						<a href="<?php echo site_url('user') ?>" class="btn" type="reset" style="margin-left: 100px;">
							<i class="ace-icon fa fa-undo bigger-110"></i> Back
						</a>
					</div>
				</div>
			  </div>
	<?php echo form_close(); ?>
		</div>
	</div>

</div>