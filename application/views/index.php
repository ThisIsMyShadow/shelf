<h3>Shelf has <?php echo $shelf->count()?> books</h3>
<form action="<?=base_url("ShelfController/put")?>" method="POST">
	<input name='book' value="<?php echo isset($book)?$book:''?>"/>
	<input type="submit"/>
</form>
<a href="<?php echo base_url("ShelfController/get_and_read")?>">get</a>
123