<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News From <?php echo $rss_title;?></h1>
  </div>

		<?php
		for($x = 0; $x < 8; $x++) {
			echo '<a href = "' . $item_array[$x][2] . '">' . $item_array[$x][0] . '</a>';
			echo '<b>' . $item_array[$x][3] . '</b>';
			echo '<br>';
			echo $item_array[$x][1];
			echo '<hr>';
		 } ?>


</div>
<?php include('views/elements/footer.php');?>
