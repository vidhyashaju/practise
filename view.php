<?php
include 'connection1.php';
$data=mysqli_query($con,"SELECT * FROM `user_details`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th,td,table{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <form action="" methode="POST">
        <center>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                <?php
                while($row=mysqli_fetch_assoc($data))
                {
                ?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['dob'];?></td>
                    <td><?php echo $row['country']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><a href="delete1.php?id=<?php echo $row['id']?>">DELETE</a></td>
                </tr>
                <?php
                }
                ?>
            </table>

        </center>
    </form>
    
</body>
</html>