<head><style type="text/css">#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ff6600;
  color: white;
}</style></head><center><table id="customers" style="text-align:center;" border="1">
<thead>
<tr>
    <th>ID</th>
    <th>Enrollment</th>
    <th>Name</th>
    <th>Age</th>
    <th>Course</th>
    <th>Branch</th>
    <th>Contact</th>
    <th>Email</th>
    <th>EDIT</th>
    <th>DELETE</th>
</tr>    
</thead>
<tbody>

<?php
include('config.php');
?>

<?php
$sql = "SELECT * FROM `user`";
$result = mysqli_query($conn, $sql);
?>

<?php
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
   <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['Enrollment']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Age']; ?></td>
        <td><?php echo $row['Course']; ?></td>
        <td><?php echo $row['Branch']; ?></td>
        <td><?php echo $row['Contact']; ?></td>
        <td><?php echo $row['Email']; ?></td>
       
        <td><a href="edit1.php?id=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a href="delete1.php?id=<?php echo $row['id']; ?>">delete</a></td>
    </tr>  
<?php    }
}
?>
</tbody>
</table></center>