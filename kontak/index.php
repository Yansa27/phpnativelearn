<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('koneksi.php');
        $query = "SELECT * FROM kontak";
        $result = mysqli_query($conn, $query);
    ?>
   
   <?php  
    // while($user_data = mysqli_fetch_array($result)) {         
    //     echo "<tr>";
    //     echo "<td>".$user_data['id']."</td>";
    //     echo "<td>".$user_data['nama']."</td>";
    //     echo "<td>".$user_data['email']."</td>";    
    //     echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    // }
    ?>

<table width='80%' border=1>
 
 <tr>
     <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
 </tr>
 <?php  
 while($user_data = mysqli_fetch_array($result)) {         
     echo "<tr>";
     echo "<td>".$user_data['id']."</td>";
     echo "<td>".$user_data['nama']."</td>";
     echo "<td>".$user_data['email']."</td>";    
     echo "<td>".$user_data['nomor_telepon']."</td>";    
     echo "<td><a href='edit_kontak.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
 }
 ?>
 </table>
</body>
</html>