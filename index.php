<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myportifolio";
//create a connection to server
$conn=mysqli_connect($servername,$username,$password,$dbname);
//checking a connection
if ($conn) {
  echo"successfull, /n";
}else {
  die("connection failed".mysqli_connect_error());
}
//database connection
$db_conn=mysqli_select_db($conn,"myportifolio");
if ($db_conn) {
  echo"connected";
} else {
  die("failed to onnect");
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>HOME</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="projects.php">Projects</a></li>
      <li><a href="skills.php">Skills</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>

  <div class="feat">
        <?php
        
        $sql ="SELECT * FROM featured";

        $exec = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($exec)) {
          echo "<p style='background-color:rgb(95, 192, 163);'>".$row['featured_skills']."</p>";
        }
        ?>
  </div>

  

</body>
</html>
