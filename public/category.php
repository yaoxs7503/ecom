<?php
require_once("../resources/config.php");
?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<div class="container">
  <header class="jumbotron hero-spacer">
    <h1>A Warm Welcome</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod, reiciendis.</p>
    <p><a href="" class="btn btn-primary btn-large">Call to action!</a></p>
  </header>
  <hr>

  <div class="row">
    <div class="col-lg-12">
      <h3>Latest Features</h3>
    </div>
  </div>
  <div class="row text-center">
   <?php get_products_in_cat_page()?>
   
  </div>
  <!-- /.row -->
</div>
<!-- /. container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>