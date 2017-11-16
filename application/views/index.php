<<<<<<< HEAD
<h3>Shelf has <?php echo $shelf->count()?> books</h3>
<form action="<?=base_url("ShelfController/put")?>" method="POST">
	<input name='book' value="<?php echo isset($book)?$book:''?>"/>
	<input type="submit"/>
</form>
<a href="<?php echo base_url("ShelfController/get_and_read")?>">get</a>
=======
<h3>Shelf has <?=$shelf->count()?> books</h3>
<form action="<?=base_url("ShelfController/put")?>" method="POST">
	<input name='book' value="<?=isset($book)?$book:''?>"/>
	<input type="submit"/>
</form>
<a href="<?=base_url("ShelfController/get_and_read")?>">get</a>
>>>>>>> cd3f4a7b83ef06418703bf1af28c2c25c7d06590
