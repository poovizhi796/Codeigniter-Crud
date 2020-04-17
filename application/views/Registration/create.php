<div class="row">
	<div class="offset-md-4 col-md-4 reg_form">
		<h3>Registration Form</h3>
		<?php echo form_open('Registration/store', ['name' => 'registration_form']);  ?>
		<div class="form-group">
			Name:
			<?php echo form_input(['name' => 'name', 'id' => 'name', 'class' => 'form-control', 'placeholder'=>'Enter Your Name']); ?>
		</div>
		<div class="form-group">
			Mobile Number:
			<?php echo form_input(['name' => 'mobile', 'id' => 'mobile','class' => 'form-control', 'placeholder' => 'Enter Mobile Number']);  ?>
		</div>
		<div class="form-group">
			Gender:
			<?php echo form_radio('gender', 'male', FALSE);  ?>Male
			<?php echo form_radio('gender', 'female', FALSE);  ?>Female
		</div>
		<div class="form-group">
			Subject:
			<?php echo form_checkbox('subject', 'PHP', FALSE);  ?>PHP
			<?php echo form_checkbox('subject', 'DOTNET', FALSE);  ?>DOTNET
			<?php echo form_checkbox('subject', 'NODE JS', FALSE);  ?>NODE JS
			<?php echo form_checkbox('subject', 'ANGULAR JS', FALSE);  ?>ANGULAR JS
		</div>
		<div class="form-group">
			District:
			<?php echo form_dropdown('district', ['Select' => 'Select', 'cbe' => 'Coimbatore','erode'=>'Erode', 'chennai'=>'Chennai'], '', ['class'=>'form-control']);  ?>
		</div>
		<div class="form-group">
			Address:
			<?php echo form_textarea(['name' => 'address', 'id' => 'address', 'class'=>'form-control', 'rows'=> '2']);  ?>
		</div>
		<div class="form-group">
			<?php echo form_submit(['name' => 'submit','value' => 'submit', 'class'=> 'btn btn-success']);  ?>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
