
<section class="right">
	<h2>Add New Category</h2>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php if(isset($_GET['cid']))echo $cat_detail['id'];?>"> 
		<label>Name</label>
		<input type="text" name="name" value=" <?php if(isset($_GET['cid']))echo $cat_detail['name']; ?>"> 
		<input type="submit" name="addcat">
	</form>
</section>