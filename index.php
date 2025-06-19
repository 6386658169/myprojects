<?php include('header.php'); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
 
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
         <form action="manage_cart.php" method="POST">
        <div class="card">
         <img src="images/ss.jpg" class="card-img-top" alt="...">
         <div class="card-body text-center">
         <h5 class="card-title">photo 1</h5>
         <p class="card-text">price: Rs.200</p>
         <button type="submit" name="add_to_cart" class="btn btn-info">add to cart</button>
         <input type="hidden" name="Item_Name" value="photo 1">
         <input type="hidden" name="price" value="450">
          </div>
         </div>
       </form>
        </div>
         <div class="col-lg-3">
         <form action="manage_cart.php" method="POST">
        <div class="card">
         <img src="images/ss.jpg" class="card-img-top" alt="...">
         <div class="card-body text-center">
         <h5 class="card-title">photo 2</h5>
         <p class="card-text">price: Rs.350</p>
         <button type="submit" name="add_to_cart" class="btn btn-info">add to cart</button>
         <input type="hidden" name="Item_Name" value="photo 1">
         <input type="hidden" name="price" value="650">
          </div>
         </div>
       </form>
        </div>
         <div class="col-lg-3">
         <form action="manage_cart.php" method="POST">
        <div class="card">
         <img src="images/ss.jpg" class="card-img-top" alt="...">
         <div class="card-body text-center">
         <h5 class="card-title">photo 3</h5>
         <p class="card-text">price: Rs.450</p>
         <button type="submit" name="add_to_cart" class="btn btn-info">add to cart</button>
         <input type="hidden" name="Item_Name" value="photo 1">
         <input type="hidden" name="price" value="750">
          </div>
         </div>
       </form>
        </div>
         <div class="col-lg-3">
         <form action="manage_cart.php" method="POST">
        <div class="card">
         <img src="images/ss.jpg" class="card-img-top" alt="...">
         <div class="card-body text-center">
         <h5 class="card-title">photo 4</h5>
         <p class="card-text">price: Rs.850</p>
         <button type="submit" name="add_to_cart" class="btn btn-info">add to cart</button>
         <input type="hidden" name="Item_Name" value="photo 1">
         <input type="hidden" name="price" value="850">
          </div>
         </div>
       </form>
        </div>
    </div>
</div>
</body>
</html>