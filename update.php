<?php include 'connection.php';
$id = $_GET['id'];
$select = "SELECT * FROM student WHERE id='$id'";
$data =mysqli_query($conn,$select);
$row= mysqli_fetch_assoc($data);
?>



<div>
    <form action="#" method="POST">
<label>Name</lable>
<input value="<?php echo $row['name']; ?>" type="text" name="name"> <br></br>

<label>email</lable>
<input value="<?php echo $row['email']; ?>" type="email" name="email"><br></br>

<label>Dob</lable>
<input value="<?php echo $row['dob']; ?>" type="date" name="dob"><br></br>

<label>Password</lable>
<input value="<?php echo $row['password']; ?>" type="password" name="password"><br></br>

<input type="submit" name="update" value="update">
<button><a href="view.php">Back</a></button>
</form>
</div>


<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];


    $query = "UPDATE student SET name='$name', email='$email', dob='$dob', password='$password' WHERE id='$id'";
    $data = mysqli_query($conn,$query);
    if($data){
        ?>
        <script type="text/javascript"> alert('data updatedsuccessfully ----!!!')</script>
        <?php
    }
}

?>