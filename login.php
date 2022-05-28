<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login verfication</title>

</head>
<body>
    <form action="#" method="POST">
    USERNAME<input type="text" name="username"><br>
    PASSOWORD<input type="text" name="password">
    <input type="submit" name="submit" value="login">

    </form>
     <?php
     
       session_start(); // Starting Session
       $error=''; // Variable To Store Error Message
       if (isset($_POST['submit'])) {
       if (empty($_POST['username']) || empty($_POST['password'])) {
      $error = "Username or Password is invalid";
    }
    else
    {
    
      $usr=$_POST['username'];
      $pwd=$_POST['password'];
       $con = new mysqli("localhost", "root","password" "school_management_system");
     // To protect MySQL injection for Security purpose
     /*$username = stripslashes($usr);
     $password = stripslashes($pwd);
     $username = mysql_real_escape_string($usr);
     $password = mysql_real_escape_string($pwd);*/
   
    // SQL query to fetch information of registerd users and finds user match.
    $sql="select member_username, password,type from users where  password='$pwd' AND member_username='$usr'";
    $result = $con->query($sql);
    $res = $result->num_rows();

    while ($rows = $res->fetch_assoc()) {
    $_SESSION['member_type']=$rows['type'];
    if ($rows =="admin")
    {

   //Initializing Session
   header("location: admin.php");
    }

   elseif ($rows=="staff")
   {
   header("location: branchadmin.php");
   }
   elseif($rows=="parent")
  {
  header("location: accountant.php");
  }
 
 else
 {

 $error = "Username or Password is invalid";
 }
 }
 $con->close();
 }
 }
 ?>


    
</body>
</html>
