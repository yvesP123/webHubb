<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo|view</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
            
    </tr>
    <?php
    $conn=new mysqli("localhost","root","password","cupuri");
    $sql="select * from uploads";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
       
        while($row=$result->fetch_assoc())
        {?>
            <tr>
<td><?php echo $row['fie_name'];?></td>

<td><?php echo $row['file_description'];?></td>
<td>
<a href="edit-category.php?catid=<?php echo base64_encode($row['id'].$rno);?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit">Edit <i class="icon-pencil"></i></a>
<a href="edit-category.php?catid=<?php echo base64_encode($row['id'].$rno);?>" class="mr-25" data-toggle="tooltip" data-original-title="delete"> Delete<i class="icon-delete"></i></a>
 
</td>
</tr>

    <?php    }
    }
    ?>
    </table>
</body>
</html>