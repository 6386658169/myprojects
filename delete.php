<?php include 'connection.php';
$id=$_GET['id'];
$delete = "DELETE FROM student WHERE id='$id'";
$data= mysqli_query($conn,$delete);

if($data){

    ?>
    <script type="text/javascript">alert('data deleted successfully !!!')</script>
    <?php
}else{
    ?>
     <script type="text/javascript">alert('Failed to delete data!'); window.location.href='view.php';</script>";
    <?php
}

?>