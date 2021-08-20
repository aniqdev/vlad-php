<?php
// Create
if(isset($_POST['edit_product'])){
  // pa($_FILES);
  // return;
    $product_id = (int)$_POST['edit_product'];
    $title = db_escape($_POST['title']);
    $description = db_escape($_POST['description']);
    $price = db_escape($_POST['price']);
    $old_price = db_escape($_POST['old_price']);
    $favorite = db_escape($_POST['favorite']);
    $ends = db_escape($_POST['ends']);
    $sku = db_escape($_POST['sku']); //Экранирует строку для использования в mysql_query
    $rating = db_escape($_POST['rating']);
    $reviews = db_escape($_POST['reviews']);
    $questions = db_escape($_POST['questions']);

    $product = db_query("SELECT card FROM products WHERE id = '$product_id'");
    $card_title = $product[0]['card'];

    if(isset($_FILES['card'])  && $_FILES['card']['size'] > 0){

      if(file_exists("cards/$card_title")) unlink("cards/$card_title");

      $card_title = time() . '-' . $_FILES["card"]["name"]; 
        $file_path = "cards/$card_title";   
      move_uploaded_file($_FILES["card"]["tmp_name"], "cards/$card_title");
      resizeSaveImage($file_path, $file_path, 300);
      $card_title = db_escape($card_title);
    }
    $fast_info = [];
    foreach ($_POST['fast_info'] as $row){
      if(!trim($row['name'])) continue;
      if(!trim($row['value'])) continue;
      $fast_info[$row['name']] = $row['value'];
    }
   $fast_info = json_encode($fast_info);
   $fast_info = db_escape($fast_info);
    db_query("UPDATE products SET
      title = '$title',
      `description` = '$description',
      price = '$price',
      old_price = '$old_price',
      favorite = '$favorite',
      ends = '$ends',
      sku = '$sku',
      rating = '$rating',
      reviews = '$reviews',
      questions = '$questions',
      `card` = '$card_title',
      fast_info = '$fast_info'
      WHERE id = '$product_id'");
    redirect('admin.php?action=products');
}

$product_id = (int)$_GET['product_id'];
$product = db_query("SELECT * FROM products WHERE id = '$product_id' ");
$product = $product[0];

$product = array_map(function($value)
{
  return esc_attr($value);
}, $product);

?>

<h2>Edit Product <?= $product['title'] ?> <?= $product['description'] ?> (<?= $product['sku'] ?>)</h2>

<form action="?action=products-edit" method="POST" enctype='multipart/form-data'>

<div class="row">
    <div class="col-lg-3">
        <img src="<?= get_product_image_src($product) ?>" class="img-thumbnail" alt="...">
        <div class="mb-3">
          <label for="formFile" class="form-label">Avatar</label>
          <input name="card" class="form-control" type="file" id="formFile">
        </div>
    </div>
    <div class="col-lg-9">

<div class="row my-3">
  <div class="col">
    <label class="form-label">product title</label>
    <input name="title" value="<?= $product['title'] ?>" type="text" class="form-control" placeholder="Title" aria-label="Title">
    <label class="form-label">sku</label>
    <input name="sku" value="<?= $product['sku'] ?>" type="text" class="form-control" placeholder="Sku" aria-label="Sku">
  </div>
  <div class="col">
    <label class="form-label">description</label>
    <textarea name="description" rows="4" class="form-control" placeholder="Description"></textarea>
  </div>
</div>

<div class="row my-3">
  <div class="col">
    <label class="form-label">price</label>
    <input name="price" value="<?= $product['price'] ?>" type="number" class="form-control" step=".01" placeholder="Price" aria-label="Price">
  </div>
  <div class="col">
    <label class="form-label">old price</label>
    <input name="old_price" value="<?= $product['old_price'] ?>" type="number" class="form-control" step=".01" placeholder="Old price" aria-label="Old price">
  </div>
</div>

<div class="row my-3">
  <div class="col">
    <label class="form-label">favorite</label>
    <select name="favorite" class="form-select">
      <option <?= if_selected($product['favorite'], '1') ?> value="1">like</option>
      <option <?= if_selected($product['favorite'], '0') ?> value="0">dislike</option>
    </select>
  </div>
  <div class="col">
    <label class="form-label">ends</label>
    <select name="ends" class="form-select">
      <option <?= if_selected($product['ends'], '1') ?> value="1">yes</option>
      <option <?= if_selected($product['ends'], '0') ?> value="0">no</option>
    </select>
  </div>
  <div class="col">
    <label class="form-label">rating</label>
    <select name="rating" class="form-select">
      <option <?= if_selected($product['rating'], '1') ?> value="1">1</option>
      <option <?= if_selected($product['rating'], '2') ?> value="2">2</option>
      <option <?= if_selected($product['rating'], '3') ?> value="3">3</option>
      <option <?= if_selected($product['rating'], '4') ?> value="4">4</option>
      <option <?= if_selected($product['rating'], '5') ?> value="5">5</option>
    </select>
  </div>
</div>

<div class="row my-3">
  <div class="col">
    <label class="form-label">reviews</label>
    <input name="reviews" value="<?= $product['reviews'] ?>" type="text" class="form-control" placeholder="Reviews" aria-label="Reviews">
  </div>
  <div class="col">
    <label class="form-label">questions</label>
    <input name="questions" value="<?= $product['questions'] ?>" type="text" class="form-control" placeholder="Questions" aria-label="Questions">
  </div>
</div>

<div class="">
  <h3>Fast info </h3>
    <?php 
      // pa($product['fast_info']);
      $fast_info = json_decode( htmlspecialchars_decode($product['fast_info']), true);
      // var_dump($fast_info);
      if(is_array($fast_info)){
        $i = 0;
        foreach ($fast_info as $key => $value) {
          echo '<div class="row my-3">';
            echo '<div class="col-3">';
            echo '<input name="fast_info['.$i.'][name]" class="form-control" value="'.$key.'">';
            echo '</div>';
            echo '<div class="col-1 text-center"> => </div>';
            echo '<div class="col-3">';
            echo '<input name="fast_info['.$i.'][value]" class="form-control" value="'.$value.'">';
            echo '</div>';
          echo '</div>';
          $i++;
        }
      }

      echo '<div class="row my-3">';
        echo '<div class="col-3">';
        echo '<input name="fast_info['.$i.'][name]" class="form-control" value="">';
        echo '</div>';
        echo '<div class="col-1 text-center"> => </div>';
        echo '<div class="col-3">';
        echo '<input name="fast_info['.$i.'][value]" class="form-control" value="">';
        echo '</div>';
      echo '</div>';
    ?>
</div>


<button name="edit_product" value="<?= $product['id'] ?>" type="submit" class="btn btn-primary">Save</button>

    </div>
</div>

</form>