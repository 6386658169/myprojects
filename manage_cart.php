<?php 
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // Add to Cart with quantity update
    if(isset($_POST['add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitem = array_column($_SESSION['cart'], 'Item_Name');
            if(in_array($_POST['Item_Name'], $myitem)){
                // If already in cart, just increase quantity
                foreach($_SESSION['cart'] as $key => $value){
                    if($value['Item_Name'] == $_POST['Item_Name']){
                        $_SESSION['cart'][$key]['Quantity'] += 1;
                        break;
                    }
                }
                echo "<script>
                        alert('Item quantity increased');
                        window.location.href='index.php';
                      </script>";
            }
            else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array(
                    'Item_Name' => $_POST['Item_Name'],
                    'price' => $_POST['price'],
                    'Quantity' => 1
                );
                echo "<script>
                        alert('Item added to cart');
                        window.location.href='index.php';
                      </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0] = array(
                'Item_Name' => $_POST['Item_Name'],
                'price' => $_POST['price'],
                'Quantity' => 1
            );
            echo "<script>
                    alert('Item added to cart');
                    window.location.href='index.php';
                  </script>";
        }
    }

    // Remove Item from Cart
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name'] == $_POST['Item_Name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index
                echo "<script>
                        alert('Item Removed');
                        window.location.href='mycart.php';
                      </script>";
                break;
            }
        }
    }
}
?>
