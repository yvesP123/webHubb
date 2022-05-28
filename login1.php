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
     $username = stripslashes($usr);
     $password = stripslashes($pwd);
     $username = mysql_real_escape_string($usr);
     $password = mysql_real_escape_string($pwd);
   
    // SQL query to fetch information of registerd users and finds user match.
    $query = $conn->query("select member_username, password,type from users where  password='$pwd' AND member_username='$usr'");
    $result = $query->num_rows();

    while ($rows = $result->fetch_array()) {
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
 $conn->close();
 }
 }
 ?>


