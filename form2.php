<?php
include 'connection1.php';
if(isset($_POST['submit']))
{
    $radio1=$_POST['gender'];
    if($radio1=="male")
    {
        $val="male";
    }
    elseif($radio1=="female")
    {
        $val="female";
    }
    $name=$_POST['name'];
   // var_dump($name);
    //exit();
    $username=$_POST['email'];
    $password=$_POST['pwd'];
    //$gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $country=$_POST['country'];
    $phone=$_POST['phone'];
    $userid=$_POST['userid'];
    mysqli_query($con,"INSERT INTO `user_details`( `name`, `username`,`gender`, `dob`, `country`, `phone`,'userid') VALUES ('$name','$username','$val','$dob','$country','$phone','$userid')");
    mysqli_query($con,"INSERT INTO `login`(`username`, `password`,'userid') VALUES ('$username','$password','$userid')");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <center>
        <caption><h1>Registration Form</h1></caption>
        <table>
            <tr>
                <td><label for="">Name </label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label for="">Username</label></td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td><label for="">Gender</label></td>
                <td><input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female</td>
            </tr>
            <tr>
                <td><label for="">DOB</label></td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td><label for="">Country</label></td>
                <td><select name="country"  id="">
                    <option value="India">India</option>
                    <option value="UAE">UAE</option>
                    <option value="USA">USA</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Phone</label></td>
                <td><input type="phone" name="phone"></td>
            </tr>
            <tr>
                <td><label for="">User id</label></td>
                <td><input type="text" name="userid"></td>
            </tr>
            
            <tr>
            
                <td><button name="submit">Register</button></td>
            </tr>
        </table>
    </center>
    </form>
    
</body>
</html>