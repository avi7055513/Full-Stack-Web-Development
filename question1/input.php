<html>
<head><title>Input Data</title>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color: #ff6600;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;

}
</style>
</head>

<body>
	<center><h1>ENTER THE DETAILS</h1></center>
  <div>  <form action="addRecord.php" method="post">
      Enrollment:- <input name="Enrollment" type="text" placeholder="Enter Enrollment no."><br>

      Name: - <input name="Name" type="text" placeholder="Enter Name"><br>

      Age: - <input name="Age" type="text" placeholder="Enter Age"><br>

      Course: - <input name="Course" type="text" placeholder="Enter course"><br>
      Branch:-<input type="text" name="Branch" placeholder="Enter Branch"><br>
      Contact:-<input type="text" name="Contact" placeholder="Enter Contact"><br>
      Email:-<input type="email" name="Email" placeholder="Enter email"><br>
      <input name="submit" type="submit">
    </form></div>
</body>
</html>