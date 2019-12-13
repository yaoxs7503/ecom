<?php

function redirect($location)
{
  header("Location: $location");
};

function query($sql)
{
  global $connection;
  // $connection=$connection->query("SET NAMES UTF8");
  return mysqli_query($connection, $sql);
}

function confirm($result)
{
  global $connection;

  if (!$result) {
    die("查询失败" . mysqli_error($connection));
  }
}

function escape_string($string)
{
  global $connection;
  return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result)
{
  return mysqli_fetch_array($result);
}
// get products
function get_products()
{
  $query = query("SELECT * FROM products");

  confirm($query);

  while ($row = fetch_array($query)) {
    $product = <<<DELIMETER
<div class="col-sm-4 col-lg-4 col-md-4">
      <div class="thumbnail">
      <a href="item.php?id={$row['product_id']}">
        <img src="{$row['product_image']}" alt="">
        </a>
        <div class="caption">
          <h4 class="pull-right">&#36;{$row['product_price']}</h4>
          <h4><a href="product.html">{$row['product_title']}</a></h4>
          <p>See more snippets like this online store item</p>
          <a href="item.php?id={$row['product_id']}" class="btn btn-primary">详细信息</a>
        </div>
      </div>
    </div>


DELIMETER;
    echo $product;
  }
}

function get_categories()
{
  $query = query("SELECT * FROM categories");
  confirm($query);
   while ($row = fetch_array($query)) {
   $category_links= <<<DELIMETER
<a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>
DELIMETER;
echo $category_links;
   }
}

// FRONT END FUNCTIONS
function get_products_in_cat_page(){
  $query = query("SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . "");
  confirm($query);
   while ($row = fetch_array($query)) {
   $category_links= <<<DELIMETER
<div class="col-md-3 col-sm-6 hero-feature">
      <div class="thumbnail">
        <img src="{$row['product_image']}" alt="">
        <div class="caption">
          <h3>{$row['product_title']}</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, est!</p>
          <p>
            <a href="item.php?id={$row['product_id']}" class="btn btn-primary">
              购买
            </a>
          </p>
        </div>
      </div>
    </div>
    <!-- /.row md-3 -->

DELIMETER;
echo $category_links;
   }
}
?>