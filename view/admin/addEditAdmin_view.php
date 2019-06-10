<section class="right">
	<h2>Add New Admin</h2>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php if(isset($_GET['aid']))echo $admin_list['id'];?>">

		<label>Username</label>
		<input type="text" name="username" value="<?php if(isset($_GET['aid']))echo $admin_list['username']; ?>"> 

		<label>Password</label>
		<input type="text" name="password" >

		<label>Type</label>
		<select name="role"> value=" <?php if(isset($_GET['aid']))echo $admin_list['role']; ?>"> 
			<option value="super">Super</option>
			<option value="regular">Regular</option>
		</select>

	
		<input type="submit" name="addAdmin">
	</form>
</section>