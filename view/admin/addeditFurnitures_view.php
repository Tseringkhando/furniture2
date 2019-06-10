
<section class="right">
	<h2>Add New Furniture</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php if(isset($_GET['fid']))echo $furniture_detail['id'];?>">
		<label>Select Category: </label>
		<select name="cat_id" >
		<?php 
			foreach($cat_details as $row)
		echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
		 ?>
		</select> 
		<label>Name</label>
		<input type="text" name="name" value=" <?php if(isset($_GET['fid']))echo $furniture_detail['name']; ?>"> 

		<label>Price</label>
		<input type="text" name="price" value="<?php if(isset($_GET['fid']))echo $furniture_detail['price']; ?>"> 


		<label>Description</label>
		<textarea name="description"> <?php if(isset($_GET['fid']))echo $furniture_detail['description']; ?></textarea>

		<label>Type</label>
		<select name="type"> value=" <?php if(isset($_GET['fid']))echo $furniture_detail['type']; ?>"> 
			<option value="first hand">First Hand</option>
			<option value="second hand">Second Hand</option>
		</select>

		<label>Display</label>
		<select name="display" value=" <?php if(isset($_GET['fid']))echo $furniture_detail['display']; ?>"> 
			<option value="1">Show</option>
			<option value="0">Hide</option>
		</select>
<?php
		if (isset($_GET['fid'])) {
			if (file_exists('../../images/furniture/' . $furniture_detail['id'] . '.jpg')) {
						echo '<img style="width: 200px; clear: both" src="../../images/furniture/' . $furniture_detail['id'] . '.jpg" />';
					}}
				?>
		<label>Image</label>
				<input type="file" name="img" /> <br> <br>

		<input type="submit" name="addFurniture" value="SUBMIT">
	</form>
</section>