<div class="table table-responsive">
	<div class="row">
		<div class="offset-md-2 col-md-8">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Name</th>
					<th>Mobile</th>
					<th>Gender</th>
					<th>Subject</th>
					<th>District</th>
					<th>Address</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($datas as $key=>$val) { $sno = 0;?>
					<tr>
						<td><?php echo ++$key; ?></td>
						<td><?php echo $val->name; ?></td>
						<td><?php echo $val->mobile; ?></td>
						<td><?php echo $val->gender; ?></td>
						<td><?php echo $val->subject; ?></td>
						<td><?php echo $val->district; ?></td>
						<td><?php echo $val->address; ?></td>
						<td><a href="<?php echo 'getOne/'.$val->id; ?>">Edit</a></td>
						<td><a href="<?php echo 'showOne/'.$val->id; ?>">View</a></td>
						<td><a href="<?php echo 'deleteOne/'.$val->id; ?>">Delete</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
</div>
