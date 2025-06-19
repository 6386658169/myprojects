<?php 

include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-8">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       $total = 0;
if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0)
{
    foreach($_SESSION['cart'] as $key => $value)
    {
        $serial = $key + 1;
        $itemTotal = $value['price'] * $value['Quantity'];
        $total += $itemTotal;

        echo "
        <tr>
            <td>$serial</td>
            <td>{$value['Item_Name']}</td>
            <td>₹ <span class='item-price'>{$value['price']}</span></td>
            <td>
                <input 
                    type='number' 
                    data-item='{$value['Item_Name']}' 
                    data-price='{$value['price']}' 
                    value='{$value['Quantity']}' 
                    min='1' max='10' 
                    class='form-control quantity-input' 
                    style='width: 80px;'>
            </td>
            <td>
                <form action='manage_cart.php' method='POST'>
                    <input type='hidden' name='Item_Name' value='{$value['Item_Name']}'>
                    <button type='submit' name='Remove_Item' class='btn btn-outline-danger btn-sm'>Remove</button>
                </form>
            </td>
        </tr>";
    }
}
else
{
    echo "<tr><td colspan='5'>Your cart is empty.</td></tr>";
}
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right">₹ <?php echo number_format($total, 2); ?></h5>
                    <form action="order_process.php" method="POST">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" required>
                            <label class="form-check-label">
                                Cash on Delivery
                            </label>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block" type="submit">Make Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
