<h3>Shelf has <?=$shelf->count()?> books</h3>
<form action="<?=base_url("ShelfController/put")?>" method="POST">
	<input name='book' value="<?=isset($book)?$book:''?>"/>
	<input type="submit"/>
</form>
<a href="<?=base_url("ShelfController/get_and_read")?>">get</a>