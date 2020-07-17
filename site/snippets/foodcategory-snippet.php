<?php
session_start();
$product=if(isset($_POST['name']))?$_POST['name']:'';
$productdesc=if(isset($_POST['description']))?$_POST['description']:'';
$price=if(isset($_POST['price']))?$_POST['price']:'';
$qty=if(isset($_POST['qty']))?$_POST['qty']:'';
$_SESSION['product']=$product;
$_SESSION['productdesc']=$productdesc;
$_SESSION['price']=$price;
$_SESSION['qty']=$qty;

?>

<div class="menu-item-tile col-md-6">
  <?php echo $product;?>
  <div class="row">
    <div class="col-sm-5">
      <div class="menu-item-photo">
        <div>{{short_name}}</div>
        <img id= "reath"class="img-responsive" width="250" height="150" src="images/menu/food/{{short_name}}.jpg" alt="Item">
      </div>
      <div class="menu-item-price">{{price_small}}<span> {{small_portion_name}}</span> {{price_large}} <span>{{large_portion_name}}</span></div>
    </div>
    <div class="menu-item-description col-sm-7">
      <br><h3 class="menu-item-title">{{name}}</h3><br><br>
      <p class="menu-item-details">{{description}}</p>
    </div>
    <form method="post" id="form">
      <input type="hidden" value="{{name}}" name="name"  >
            <input type="hidden" value="{{description}}" name="description">
      <input type="hidden" value="{{price_small}}" name="price"  >
      QTY:<input type="text" value="1" name="qty" size="2">
      <a href="cart.php"><input type="submit" value="ADD TO CART" id="ord"></a>
</form>
  </div>
  <hr class="visible-xs">
</div>
