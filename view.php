<?php include 'connection.php'?>

<div>
    <a href="index.php">Home</a>
    <table border="1px" cellspacing="0" cellpadding="10px">
        <tr>
            <th>Sr.no.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Dob</th>
            <th>Password</th>
          <th colspan="2">Action</th>

        </tr>
          <?php
          $query = "SELECT * FROM student";
          $data = mysqli_query($conn,$query);
          $result = mysqli_num_rows($data);
          if($result){
            while($row = mysqli_fetch_assoc($data)){
                ?>
                   <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['password']; ?></td>

                    <td><a href="update.php?id=<?php echo $row['id']; ?>">edit</a></td>
                    <td><a onclick ="return confirm('Are you sure deleted data !!!')" href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
                   </tr>

                <?php
            }
          }else{
            echo "no recard found";
          }
          ?>

    </table>
</div>