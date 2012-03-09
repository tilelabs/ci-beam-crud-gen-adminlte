		<h2>Users</h2>
		<div class="row">
			<div class="span4 pagination-height">
				<a href="<?php echo site_url('auth/add'); ?>" class="btn">Add</a>
			</div>
			<div class="span8">
				<?php echo $this->pagination->create_links(); ?>
			</div>
		</div>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
					<th>Email</th>
					<th>Registered</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user): ?>
				<tr>
					<td><?php echo $user->getFirstName() ?></td>
					<td><?php echo $user->getLastName() ?></td>
					<td><a href="<?php echo site_url('auth/edit/' . $user->getId()); ?>"><?php echo $user->getUsername() ?></a></td>
					<td><?php echo $user->getEmail() ?></td>
					<td><?php echo date_format($user->getRegistered(), 'd M Y H:i:s'); ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>