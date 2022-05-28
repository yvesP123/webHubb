<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <form action="action.php" method="POST">
        <!-- <label>Names</label> -->
        <!-- <input type="text" name="names"></br> -->
        <!-- <label>Class</label> -->
        <!-- <input type="text" name="class"></br> -->
        <!-- <input type="submit" value="submit"> -->
        <!-- <a href="view.php">view</a> -->
        <label for="message">Message</label>
        <textarea name="message">Message</textarea>
        <input type="submit" value="Encrypt" name="text">
        <input type="submit" value="Dencrypt" namwe="dencrypt">
        

    </form>
    <?php
/*session_start();

$conn=new mysqli("localhost","root","password","cupuri");

	if(isset($_POST['names']))
{

 $name = $_POST['names'];
 $class = $_POST['class'];

$sql="INSERT INTO  dept (name,class) VALUES('$name','$class')";
	if($conn->query($sql)){
		echo'<script>alert("the data successfull");</script>';
}
else{
	echo'<script>alert("samething went wrong");</script>';

	}
}*/
?> 
</body>
</html>