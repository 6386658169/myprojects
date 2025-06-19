<?php include 'connection.php'?>
<div>
    <form action="#" method="POST">
<label>Name</lable>
<input type="text" name="name"><br></br>

<label>email</lable>
<input type="email" name="email"><br></br>

<label>Dob</lable>
<input type="date" name="dob"><br></br>

<label>password</lable>
<input type="password" name="password"><br></br>

<input type="submit" name="submit" value="save">
<button><a href="view.php">view</a></button>
</form>
</div>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];

    $query = "INSERT INTO student (name,email,dob,password) VALUES('$name', '$email', '$dob', '$password')"; 
    $data = mysqli_query($conn, $query);
    if($data){
       ?>
       <script type="text/javascript">
        alert('data insert successfully !!!')
       </script>
       <?php
    }else{
        ?>
        <script type="text/javascript">
        alert('data failed successfully !!!')
       </script>
       <?php
    }
}


?>