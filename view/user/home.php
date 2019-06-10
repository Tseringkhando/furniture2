<main class="home">
	<p>
		Welcome to Fran's Furniture. We're a family run furniture shop based in Northampton. We stock a wide variety of 
		modern and antique furniture including laps, bookcases, beds and sofas.
	</p>

	<div id="special_offer">
	<?php foreach ($offers as $offers_row) {?>
	<div class="photo">
		<a href="../images/Specialoffer/<?php echo $offers_row['id'];?>.jpg">
			<img style="width: 100%; height:400px;" src="../images/Specialoffer/<?php echo $offers_row['id'];?>.jpg" />
			</a>
	
	</div>

	<h2 class="offer_title">
	<a href="furniture">	<?php echo $offers_row['name'] ?></a>
		
	</h2>
	<div class="description">
		<?php echo $offers_row['description'] ?>
		<div class="post_date">
			<i>Posted On:<?php echo $offers_row['offer_starting'] ?></i>
		</div>
	</div>
	<?php } ?>
</div>
</main>