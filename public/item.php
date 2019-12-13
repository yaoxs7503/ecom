<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
    <!-- Page Content -->
<div class="container">

       <!-- Side Navigation -->

              <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>
<?php 
$query=query("SELECT * FROM products WHERE product_id =" . escape_string($_GET['id']) . "");
confirm($query);
while($row=fetch_array($query)):

?>
<div class="col-md-9">
 <div class="row">
  <div class="col-md-7">
    <img src="<?php echo $row['product_image'];?>" alt="" class="img-responsive">
  </div>
  <div class="col-md-5">
    <div class="thumbnail">
      <div class="caption-full">
        <h4>
          <a href="#"><?php echo $row['product_title']; ?></a>
        </h4>
        <hr>
        <h4><?php echo "&#36;".$row['product_price']; ?></h4>
        <div class="ratings">
          <p>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star-empty"></span>
            4.0 starts
          </p>
        </div>
        <p><?php echo $row['short_desc'] ?></p>
        <form action="" method="post">
          <div class="form-group">
            <input type="submit" value="加入购物车" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>  
  </div>
</div>
  <!-- col-md-9 ends here -->
  <hr>
<div class="row">
  <div role="tabpanel">

<ul class="nav nav-tabs" role="tablist">
  <li class="active" role="presentation">
    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">内容</a></li>
  <li role="presentation">
    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">形式</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" role="tabpanel" id="home">
    <p>
    <?php echo $row['product_description']; ?>
</p>
  </div>
<div class="tab-pane" id="profile" role="tabpanel">
<div class="col-md-6">
  <h3>表单的学习</h3>
</div>
</div>

</div>
</div>
</div>
<?php endwhile; ?>
</div>
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>