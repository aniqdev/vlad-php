<?php


if (isset($_POST['new_product'])) {
	if (empty($_POST['title'])){
		$message = 'Please add title!';
		flash_alert('danger', $message);
		redirect('admin.php?action=products-add');
	}

	if (empty($_POST['price'])){
		$message = 'Please add price!';
		flash_alert('danger', $message);
		redirect('admin.php?action=products-add');
	}

	if (empty($_POST['description'])){
		$message = 'Please add description!';
		flash_alert('danger', $message);
		redirect('admin.php?action=products-add');
	}
	
	if (empty($_POST['sku'])){
		$message = 'Please add sku!';
		flash_alert('danger', $message);
		redirect('admin.php?action=products-add');
	}
}

// Create
if(isset($_POST['new_product'])){
	$title = db_escape($_POST['title']);
	$description = db_escape($_POST['description']);
	$price = db_escape($_POST['price']);
	$old_price = db_escape($_POST['old_price']);
	$favorite = db_escape($_POST['favorite']);
	$sku = db_escape($_POST['sku']); //Экранирует строку для использования в mysql_query
	$rating = db_escape($_POST['raiting']);
	$reviews = db_escape($_POST['reviews']);
	$questions = db_escape($_POST['questions']);
	$fast_info = db_escape($_POST['fast_info']);
	db_query("INSERT INTO products SET
		title = '$title',
		`description` = '$description',
		price = '$price',
		old_price = '$old_price',
		favorite = '$favorite',
		sku = '$sku',
		rating = '$rating',
		reviews = '$reviews',
		questions = '$questions',
		fast_info = '$fast_info'");

	$message = 'Product added successfuly!';
	flash_alert('success', $message);
	redirect('admin.php?action=products');
}


?>

<h2>Add Product</h2>
<form action="?action=products-add" method="Post">

<div class="row my-3">
	<div class="col">
		<input name="title" value="<?= session_take_post('title') ?>" type="text" class="form-control" placeholder="Title" aria-label="Title">
	</div>
	<div class="col">
		<input name="description" value="<?= session_take_post('description') ?>" type="text" class="form-control" placeholder="Description" aria-label="description">
	</div>
</div>

<div class="row my-3">
	<div class="col">
		<input name="price" value="<?= session_take_post('price') ?>" type="number" class="form-control" step=".01" placeholder="Price" aria-label="Price">
	</div>
	<div class="col">
		<input name="old_price" value="<?= session_take_post('old_price') ?>" type="number" class="form-control" step=".01" placeholder="Old price" aria-label="Old price">
	</div>
</div>

<div class="row my-3">
	<div class="col">
		<input name="sku" value="<?= session_take_post('sku') ?>" type="text" class="form-control" placeholder="Sku" aria-label="Sku">
	</div>
	<div class="col">
		<select name="favorite" class="form-control">
		<option value="like">like</option>
		<option value="dislike">dislike</option>
		</select>
	</div>
	<div class="col">
		<select name="rating" class="form-select">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
	</div>
</div>

<div class="row my-3">
	<div class="col">
		<input name="reviews" value="<?= session_take_post('reviews') ?>" type="text" class="form-control" placeholder="Reviews" aria-label="Reviews">
	</div>
	<div class="col">
		<input name="questions" value="<?= session_take_post('questions') ?>" type="text" class="form-control" placeholder="Questions" aria-label="Questions">
	</div>
</div>

<div class="row my-3">
	<div class="col">
		<input name="fast_info" value="<?= session_take_post('fast_info') ?>" type="text" class="form-control" placeholder="Fast info" aria-label="Fast info">
	</div>
</div>

<button name="new_product" type="submit" class="btn btn-primary">Save</button>

</form>